<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * BusinessStudyCategoriesController Controller
 *
 * @property \App\Model\Table\BusinessStudyCategoriesTable $BusinessStudyCategories
 *
 * @method \App\Model\Entity\BusinessStudyCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessStudyCategoriesController extends AppController
{

    /**
     * Initialize method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
        $this->BusinessCourseCategories  = TableRegistry::get('BusinessCourseCategories');
        $this->BusinessStudyContents     = TableRegistry::get('BusinessStudyContents');
        $this->BusinessUploadContents    = TableRegistry::get('BusinessUploadContents');
    }

    /**
     * view method
     *
     * @param string|null $id  BusinessCourseCategories.id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->sessionCheck();

        $courseData = $this->BusinessCourseCategories->get($id, [
            'contain' => []
        ]);

        $this->set('courseData', $courseData);
        $this->set('pageTitle', $courseData->name . ' - 学習コンテンツ一覧');
        $this->set('levelColor', $this->Define::STUDY_LEVEL_COLOR);
        $this->set('studyStatus', $this->Define::STUDY_UPLOAD_STATUS);

        $datas = array();
        $studyDatas = array();

        $conn = ConnectionManager::get('default');

        $sql = "";
        $sql .= "SELECT BusinessStudyCategories.id AS business_study_categories__id,";
        $sql .= "       BusinessStudyCategories.name AS business_study_categories__name,";
        $sql .= "       BusinessStudyCategories.sub_name AS business_study_categories__sub_name,";
        $sql .= "       BusinessStudyCategories.level AS business_study_categories__level,";
        $sql .= "       BusinessStudyCategories.is_uploaded AS business_study_categories__is_downloaded,";
        $sql .= "       BusinessStudyCategories.is_uploaded AS business_study_categories__is_uploaded,";
        $sql .= "       BusinessUploadContents.check_status_flg AS business_upload_contents__check_status_flg,";
        $sql .= "       BusinessUploadContents.check_score AS business_upload_contents__check_score,";
        $sql .= "       BusinessUploadContents.check_comment AS business_upload_contents__check_comment,";
        $sql .= "       BusinessUploadContents.check_answer_flg AS business_upload_contents__check_answer_flg,";
        $sql .= "       BusinessUploadContents.check_manager AS business_upload_contents__check_manager,";
        $sql .= "       BusinessUploadContents.check_at AS business_upload_contents__check_at";
        $sql .= "  FROM business_study_categories AS BusinessStudyCategories";
        $sql .= "  LEFT OUTER JOIN business_upload_contents AS BusinessUploadContents";
        $sql .= "    ON BusinessUploadContents.business_study_category_id = BusinessStudyCategories.id";
        $sql .= "   AND BusinessUploadContents.user_id = " . $this->request->session()->read('loginUser.id');
        $sql .= "   AND BusinessUploadContents.is_deleted = 0";
        $sql .= " WHERE BusinessStudyCategories.business_course_category_id  = " . $id;
        $sql .= "   AND BusinessStudyCategories.is_deleted = 0";
        $sql .= " ORDER BY BusinessStudyCategories.level ASC, BusinessStudyCategories.order_num ASC";

        $datas = $conn->query($sql)->fetchAll('assoc');

        foreach ($datas as $data) {
            $data['contents'] = array();

            $sql = "";
            $sql .= "SELECT BusinessStudyContents.*";
            $sql .= "  FROM business_study_contents AS BusinessStudyContents";
            $sql .= " WHERE BusinessStudyContents.business_study_category_id  = " . $data['business_study_categories__id'];
            $sql .= "   AND BusinessStudyContents.is_deleted = 0";
            $sql .= " ORDER BY BusinessStudyContents.level ASC, BusinessStudyContents.order_num ASC";

            $data['contents'] = $conn->query($sql)->fetchAll('assoc');
            $studyDatas[] = $data;
        }

        $this->set('studyDatas', $studyDatas);
    }

    /**
     * detail method
     *
     * @param string|null $id ID
     * @return \Cake\Http\Response|void
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function detail($courseCategoryId, $studyCategoryId)
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
        $sql .= "       BusinessStudyCategories.is_downloaded AS business_study_categories__is_downloaded,";
        $sql .= "       BusinessStudyCategories.is_uploaded AS business_study_categories__is_uploaded,";
        $sql .= "       BusinessUploadContents.check_status_flg AS business_upload_contents__check_status_flg,";
        $sql .= "       BusinessUploadContents.check_score AS business_upload_contents__check_score,";
        $sql .= "       BusinessUploadContents.check_comment AS business_upload_contents__check_comment,";
        $sql .= "       BusinessUploadContents.check_answer_flg AS business_upload_contents__check_answer_flg,";
        $sql .= "       BusinessUploadContents.check_manager AS business_upload_contents__check_manager,";
        $sql .= "       BusinessUploadContents.check_at AS business_upload_contents__check_at";
        $sql .= "  FROM business_study_categories AS BusinessStudyCategories";
        $sql .= "  LEFT OUTER JOIN business_upload_contents AS BusinessUploadContents";
        $sql .= "    ON BusinessUploadContents.business_study_category_id = BusinessStudyCategories.id";
        $sql .= "   AND BusinessUploadContents.user_id = " . $this->request->session()->read('loginUser.id');
        $sql .= "   AND BusinessUploadContents.is_deleted = 0";
        $sql .= " WHERE BusinessStudyCategories.id  = " . $studyCategoryId;
        $sql .= "   AND BusinessStudyCategories.business_course_category_id  = " . $courseCategoryId;
        $sql .= "   AND BusinessStudyCategories.is_deleted = 0";

        $studyData = $conn->query($sql)->fetch('assoc');

        $this->set('studyData', $studyData);
        $this->set('pageTitle', $studyData['business_study_categories__name'] . ' - 学習コンテンツ詳細');
        $this->set('levelColor', $this->Define::STUDY_LEVEL_COLOR);
        $this->set('studyStatus', $this->Define::STUDY_UPLOAD_STATUS);
        $this->set('viewDir', $this->Define::BUSINESS_CATEGORIES_VIEW_DIR);
        $this->set('detailTemp', $this->Define::BUSINESS_CATEGORIES_DIR . 'detail' . $studyCategoryId);
    }

    /**
     * Download method
     *
     * @param int| $courseCategoryId BusinessCourseCategories.id
     * @param int| $studyCategoryId BusinessStudyCategories.id
     * @param string| $type 解答ファイルかどうか判定
     * @return file
     */
    public function download($courseCategoryId, $studyCategoryId, $type)
    {
        $this->sessionCheck();

        $this->autoRender = false;

        try {
            $connection = ConnectionManager::get('default');
            $connection->begin();

            $businessStudyCategories = $this->BusinessStudyCategories->find()->where([
                'BusinessStudyCategories.id'                          => $studyCategoryId,
                'BusinessStudyCategories.business_course_category_id' => $courseCategoryId,
                'BusinessStudyCategories.is_deleted'                  => 0
            ])->first();

            $fileType = 0;
            $file = "";
            if ($type == 'contents') {
                $fileType = ($businessStudyCategories->file_type !== null) ? $businessStudyCategories->file_type : 1;
                $file = 'business_contents_' . $studyCategoryId . '.' . $this->Define::DL_FILE_TYPE[$fileType];
            } else {
                $fileType = ($businessStudyCategories->answer_file_type !== null) ? $businessStudyCategories->answer_file_type : 1;
                $file = 'business_contents_' . $studyCategoryId . '_' . $type . '.' . $this->Define::DL_FILE_TYPE[$fileType];
            }

            $dlFile = $this->Define::BUSINESS_CATEGORIES_DL_DIR . 'id_' . $studyCategoryId . DS . $file;

            if ($fileType === 1) {
                $this->response->type('application/zip');
                $this->response->file($dlFile, array('download' => true));
                $this->response->download($file);
            } else if ($fileType === 2) {
                $this->response->type('application/pdf');
                $this->response->file($dlFile);
                $this->response->getBody($file);
            } else if ($fileType === 3) {
                $this->response->type('text/plain');
                $this->response->file($dlFile);
                $this->response->getBody($file);
            }

            $businessStudyCategories->download_cnt = $businessStudyCategories->download_cnt + 1;
            if ($this->BusinessStudyCategories->save($businessStudyCategories)) {
                $connection->commit();
            }

        } catch (Exception $e) {
            $connection->rollback();
            throw $e;
        }
    }
}
