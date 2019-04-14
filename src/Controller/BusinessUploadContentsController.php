<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Mailer\UserEmail;
use PhpParser\Node\Expr\Array_;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Core\Exception\Exception;
use Cake\I18n\Cake\I18n;
use Cake\I18n\Date;
use Aura\Intl\Aura\Intl;


/**
 * BusinessUploadContents Controller
 *
 * @property \App\Model\Table\ TODO
 *
 * @method \App\Model\Entity\TODO | \Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessUploadContentsController extends AppController
{
    /**
     * Initialize method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();

        $this->Users                    = TableRegistry::get('Users');
        $this->BusinessCourseCategories = TableRegistry::get('BusinessCourseCategories');
        $this->BusinessStudyCategories  = TableRegistry::get('BusinessStudyCategories');
    }
    
    /**
     * Add method
     *
     * @param string|null
     * @return \Cake\Http\Response|void
     */
    public function add($courseCategoryId, $studyCategoryId)
    {
        $this->sessionCheck();

        $this->request->session()->write([
            'loginUser.referer1' => $this->referer()
        ]);
        $this->set('referer', $this->request->session()->read('loginUser.referer1'));
        $this->set('isEnableBack', true);

        $conn = ConnectionManager::get('default');

        $sql = "";
        $sql .= "SELECT BusinessStudyCategories.id AS business_study_categories__id,";
        $sql .= "       BusinessStudyCategories.business_course_category_id AS business_study_categories__business_course_category_id,";
        $sql .= "       BusinessStudyCategories.name AS business_study_categories__name,";
        $sql .= "       BusinessStudyCategories.sub_name AS business_study_categories__sub_name,";
        $sql .= "       BusinessStudyCategories.level AS business_study_categories__level,";
        $sql .= "       BusinessStudyCategories.is_uploaded AS business_study_categories__is_downloaded,";
        $sql .= "       BusinessStudyCategories.is_uploaded AS business_study_categories__is_uploaded,";
        $sql .= "       BusinessCourseCategories.name AS business_course_categories__name,";
        $sql .= "       BusinessUploadContents.check_status_flg AS business_upload_contents__check_status_flg,";
        $sql .= "       BusinessUploadContents.check_score AS business_upload_contents__check_score,";
        $sql .= "       BusinessUploadContents.check_comment AS business_upload_contents__check_comment,";
        $sql .= "       BusinessUploadContents.check_answer_flg AS business_upload_contents__check_answer_flg,";
        $sql .= "       BusinessUploadContents.check_manager AS business_upload_contents__check_manager,";
        $sql .= "       BusinessUploadContents.check_at AS business_upload_contents__check_at";
        $sql .= "  FROM business_study_categories AS BusinessStudyCategories";
        $sql .= "  LEFT OUTER JOIN business_course_categories AS BusinessCourseCategories";
        $sql .= "    ON BusinessCourseCategories.id = BusinessStudyCategories.business_course_category_id";
        $sql .= "   AND BusinessCourseCategories.is_deleted = 0";
        $sql .= "  LEFT OUTER JOIN business_upload_contents AS BusinessUploadContents";
        $sql .= "    ON BusinessUploadContents.business_study_category_id = BusinessStudyCategories.id";
        $sql .= "   AND BusinessUploadContents.user_id = " . $this->request->session()->read('loginUser.id');
        $sql .= "   AND BusinessUploadContents.is_deleted = 0";
        $sql .= " WHERE BusinessStudyCategories.id  = " . $studyCategoryId;
        $sql .= "   AND BusinessStudyCategories.business_course_category_id  = " . $courseCategoryId;
        $sql .= "   AND BusinessStudyCategories.is_deleted = 0";

        $studyData = $conn->query($sql)->fetch('assoc');

        $this->set('studyData', $studyData);
        $this->set('pageTitle', $studyData['business_study_categories__name'] . ' - 学習コンテンツアップロード');
        $this->set('studyStatus', $this->Define::STUDY_UPLOAD_STATUS);
    }


    /** API ajax **/

    /**
     * ajAdd method API
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function ajAdd()
    {
        $this->autoRender = false;
        $this->response->type('application/json');

        if (!$this->request->is("ajax")) {
            $this->responseData['error']  = array('code' => 600, 'msseage' =>$this->convertErrorMessage(600));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        if (!$this->requestData) {
            $this->responseData['error']  = array('code' => 601, 'msseage' =>$this->convertErrorMessage(601));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }

        try {
            $connection = ConnectionManager::get('default');
            $connection->begin();

            $uploadDir = new Folder(APP . $this->Define::BUSINESS_CATEGORIES_UL_DIR . 'uid_' . $this->request->session()->read('loginUser.id'), true);
            $tmpFile = new File($this->requestData['name']['name']);
            $limitSize = 2048000000;
            
            if (($this->requestData['name']['error'] === 2) || ($this->requestData['name']['size'] > $limitSize)) {
                throw new Exception('', 702);
            }

            if(!in_array($tmpFile->ext(), $this->Define->allowFileTypes)) {
                throw new Exception('', 703);
            }
            $fileType = 0;
            for ($i = 0; $i < count($this->Define::DL_FILE_TYPE); $i++) {
                if ($tmpFile->ext() == $this->Define::DL_FILE_TYPE[$i]) {
                    $fileType = $i;
                }
            }

            $uploadContent = $this->BusinessUploadContents->find()
                ->where([
                    'BusinessUploadContents.user_id'                    => $this->request->session()->read('loginUser.id'),
                    'BusinessUploadContents.business_study_category_id' => $this->requestData['business_study_category_id'],
                    'BusinessUploadContents.is_deleted'                 => 0
                ])
                ->first();

            $fileId = 0;
            $is_update = false;
            if ($uploadContent) {
                $is_update = true;
                $fileId = $uploadContent->id;
                // 元ファイルの削除
                unlink($uploadDir->path . "/" . $uploadContent->file_name);
            } else {
                $query = $this->BusinessUploadContents->find();
                $result = $query->select(['max_id' => $query->func()->max('id')])->first();
                $fileId = $result->max_id + 1;

                $uploadContent = $this->BusinessUploadContents->newEntity();
            }

            $date = new Date();
            $createDate = $date->format('Ymd');
            $fileName = 'U' . $this->request->session()->read('loginUser.id') . 'F' . $fileId . '_' . $createDate . '.' . $tmpFile->ext();

            if (!@move_uploaded_file($this->requestData['name']["tmp_name"], $uploadDir->path . "/" . $fileName)) {
                throw new Exception('', 701);
            }

            $this->requestData['id']                         = $fileId;
            $this->requestData['user_id']                    = $this->request->session()->read('loginUser.id');
            $this->requestData['business_study_category_id'] = $this->requestData['business_study_category_id'];
            $this->requestData['name']                       = $this->requestData['name']['name'];
            $this->requestData['comment']                    = $this->requestData['comment'];
            $this->requestData['file_name']                  = $fileName;
            $this->requestData['file_type']                  = $fileType;
            $this->requestData['is_deleted']                 = 0;
            if ($is_update) {
                $this->requestData['create_user']            = $uploadContent->create_user;
                $this->requestData['create_at']              = $uploadContent->create_at;
                $this->requestData['update_user']            = $this->request->session()->read('loginUser.id');
                $this->requestData['update_at']              = date('Y-m-d H:i:s');
                $this->requestData['check_status_flg']       = 1;
                $this->requestData['check_score']            = $uploadContent->check_score;
                $this->requestData['check_comment']          = $uploadContent->check_comment;
                $this->requestData['check_answer_flg']       = $uploadContent->check_answer_flg;
                $this->requestData['check_manager']          = $uploadContent->check_manager;
                $this->requestData['check_at']               = $uploadContent->check_at;
            } else {
                $this->requestData['create_user']            = $this->request->session()->read('loginUser.id');
                $this->requestData['create_at']              = date('Y-m-d H:i:s');
                $this->requestData['update_user']            = '';
                $this->requestData['update_at']              = '';
                $this->requestData['check_status_flg']       = 1;
                $this->requestData['check_score']            = 0;
                $this->requestData['check_comment']          = '';
                $this->requestData['check_answer_flg']       = '';
                $this->requestData['check_manager']          = '';
                $this->requestData['check_at']               = '';
            }

            $uploadContent = $this->BusinessUploadContents->patchEntity($uploadContent, $this->requestData, ['validate' => false]);
            if ($this->BusinessUploadContents->save($uploadContent)) {
                $user = $this->Users->get($uploadContent->user_id, [
                    'contain' => []
                ]);
                // mail

                $email = new UserEmail('default');
                $email->uploadFileMail($uploadContent, $user, $uploadDir->path, $this->requestData['category_name'], 'ビジネス');

                $this->responseData['success'] = 0;
                $connection->commit();

            } else {
                throw new Exception('', 801);
            }

        } catch (Exception $e) {
            $connection->rollback();
            $this->responseData['error']  = array('code' => $e->getCode(), 'msseage' =>$this->convertErrorMessage($e->getCode()));
        }

        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }
}
