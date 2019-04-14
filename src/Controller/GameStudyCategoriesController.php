<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * GameStudyCategoriesController Controller
 *
 * @property \App\Model\Table\GameStudyCategoriesTable $GameStudyCategories
 *
 * @method \App\Model\Entity\GameStudyCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GameStudyCategoriesController extends AppController
{

    private $parentTitle   = '';
    private $parentTitleEn = '';

    /**
     * Initialize method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
        $this->GameCourseCategories  = TableRegistry::get('GameCourseCategories');
        $this->GameStudyContents     = TableRegistry::get('GameStudyContents');
        $this->GameUploadContents    = TableRegistry::get('GameUploadContents');
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

        $courseData = $this->GameCourseCategories->get($id, [
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
        $sql .= "SELECT GameStudyCategories.id AS game_study_categories__id,";
        $sql .= "       GameStudyCategories.name AS game_study_categories__name,";
        $sql .= "       GameStudyCategories.sub_name AS game_study_categories__sub_name,";
        $sql .= "       GameStudyCategories.level AS game_study_categories__level,";
        $sql .= "       GameStudyCategories.is_uploaded AS game_study_categories__is_downloaded,";
        $sql .= "       GameStudyCategories.is_uploaded AS game_study_categories__is_uploaded,";
        $sql .= "       GameUploadContents.check_status_flg AS game_upload_contents__check_status_flg,";
        $sql .= "       GameUploadContents.check_score AS game_upload_contents__check_score,";
        $sql .= "       GameUploadContents.check_comment AS game_upload_contents__check_comment,";
        $sql .= "       GameUploadContents.check_answer_flg AS game_upload_contents__check_answer_flg,";
        $sql .= "       GameUploadContents.check_manager AS game_upload_contents__check_manager,";
        $sql .= "       GameUploadContents.check_at AS game_upload_contents__check_at";
        $sql .= "  FROM game_study_categories AS GameStudyCategories";
        $sql .= "  LEFT OUTER JOIN game_upload_contents AS GameUploadContents";
        $sql .= "    ON GameUploadContents.game_study_category_id = GameStudyCategories.id";
        $sql .= "   AND GameUploadContents.user_id = " . $this->request->session()->read('loginUser.id');
        $sql .= "   AND GameUploadContents.is_deleted = 0";
        $sql .= " WHERE GameStudyCategories.game_course_category_id  = " . $id;
        $sql .= "   AND GameStudyCategories.is_deleted = 0";
        $sql .= " ORDER BY GameStudyCategories.level ASC, GameStudyCategories.order_num ASC";

        $datas = $conn->query($sql)->fetchAll('assoc');

        foreach ($datas as $data) {
            $data['contents'] = array();

            $sql = "";
            $sql .= "SELECT GameStudyContents.*";
            $sql .= "  FROM game_study_contents AS GameStudyContents";
            $sql .= " WHERE GameStudyContents.game_study_category_id  = " . $data['game_study_categories__id'];
            $sql .= "   AND GameStudyContents.is_deleted = 0";
            $sql .= " ORDER BY GameStudyContents.level ASC, GameStudyContents.order_num ASC";

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
        $sql .= "SELECT GameStudyCategories.id AS game_study_categories__id,";
        $sql .= "       GameStudyCategories.game_course_category_id AS game_study_categories__game_course_category_id,";
        $sql .= "       GameStudyCategories.name AS game_study_categories__name,";
        $sql .= "       GameStudyCategories.sub_name AS game_study_categories__sub_name,";
        $sql .= "       GameStudyCategories.level AS game_study_categories__level,";
        $sql .= "       GameStudyCategories.is_downloaded AS game_study_categories__is_downloaded,";
        $sql .= "       GameStudyCategories.is_uploaded AS game_study_categories__is_uploaded,";
        $sql .= "       GameUploadContents.check_status_flg AS game_upload_contents__check_status_flg,";
        $sql .= "       GameUploadContents.check_score AS game_upload_contents__check_score,";
        $sql .= "       GameUploadContents.check_comment AS game_upload_contents__check_comment,";
        $sql .= "       GameUploadContents.check_answer_flg AS game_upload_contents__check_answer_flg,";
        $sql .= "       GameUploadContents.check_manager AS game_upload_contents__check_manager,";
        $sql .= "       GameUploadContents.check_at AS game_upload_contents__check_at";
        $sql .= "  FROM game_study_categories AS GameStudyCategories";
        $sql .= "  LEFT OUTER JOIN game_upload_contents AS GameUploadContents";
        $sql .= "    ON GameUploadContents.game_study_category_id = GameStudyCategories.id";
        $sql .= "   AND GameUploadContents.user_id = " . $this->request->session()->read('loginUser.id');
        $sql .= "   AND GameUploadContents.is_deleted = 0";
        $sql .= " WHERE GameStudyCategories.id  = " . $studyCategoryId;
        $sql .= "   AND GameStudyCategories.game_course_category_id  = " . $courseCategoryId;
        $sql .= "   AND GameStudyCategories.is_deleted = 0";

        $studyData = $conn->query($sql)->fetch('assoc');

        $this->set('studyData', $studyData);
        $this->set('pageTitle', $studyData['game_study_categories__name'] . ' - 学習コンテンツ詳細');
        $this->set('levelColor', $this->Define::STUDY_LEVEL_COLOR);
        $this->set('studyStatus', $this->Define::STUDY_UPLOAD_STATUS);
        $this->set('viewDir', $this->Define::GAME_CATEGORIES_VIEW_DIR);
        $this->set('detailTemp', $this->Define::GAME_CATEGORIES_DIR . 'detail' . $studyCategoryId);
    }

    /**
     * Download method
     *
     * @param int| $courseCategoryId GameCourseCategories.id
     * @param int| $studyCategoryId GameStudyCategories.id
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

            $gameStudyCategories = $this->GameStudyCategories->find()->where([
                'GameStudyCategories.id'                          => $studyCategoryId,
                'GameStudyCategories.game_course_category_id' => $courseCategoryId,
                'GameStudyCategories.is_deleted'                  => 0
            ])->first();

            $fileType = 0;
            $file = "";
            if ($type == 'contents') {
                $fileType = ($gameStudyCategories->file_type !== null) ? $gameStudyCategories->file_type : 1;
                $file = 'game_contents_' . $studyCategoryId . '.' . $this->Define::DL_FILE_TYPE[$fileType];
            } else {
                $fileType = ($gameStudyCategories->answer_file_type !== null) ? $gameStudyCategories->answer_file_type : 1;
                $file = 'game_contents_' . $studyCategoryId . '_' . $type . '.' . $this->Define::DL_FILE_TYPE[$fileType];
            }

            $dlFile = $this->Define::GAME_CATEGORIES_DL_DIR . 'id_' . $studyCategoryId . DS . $file;

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

            $gameStudyCategories->download_cnt = $gameStudyCategories->download_cnt + 1;
            if ($this->GameStudyCategories->save($gameStudyCategories)) {
                $connection->commit();
            }

        } catch (Exception $e) {
            $connection->rollback();
            throw $e;
        }
    }
}
