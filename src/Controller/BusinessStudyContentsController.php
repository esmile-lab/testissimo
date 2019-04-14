<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * BusinessStudyContentsController Controller
 *
 * @property \App\Model\Table\BusinessStudyContentsTable $BusinessStudyContents
 *
 * @method \App\Model\Entity\BusinessStudyContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessStudyContentsController extends AppController
{

    /**
     * Initialize method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
    }

    /**
     * detail method
     *
     * @param string|null $id ID
     * @return \Cake\Http\Response|void
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function detail($id = null)
    {
        $this->sessionCheck();

        $this->request->session()->write([
            'loginUser.referer1' => $this->referer()
        ]);
        $this->set('referer', $this->request->session()->read('loginUser.referer1'));
        $this->set('isEnableBack', true);

        $conn = ConnectionManager::get('default');

        $sql = "";
        $sql .= "SELECT BusinessStudyContents.id AS business_study_contents__id,";
        $sql .= "       BusinessStudyContents.business_study_category_id AS business_study_contents__business_study_category_id,";
        $sql .= "       BusinessStudyContents.name AS business_study_contents__name,";
        $sql .= "       BusinessStudyContents.sub_name AS business_study_contents__sub_name,";
        $sql .= "       BusinessStudyContents.level AS business_study_contents__level";
        $sql .= "  FROM business_study_contents AS BusinessStudyContents";
        $sql .= " WHERE BusinessStudyContents.id  = " . $id;
        $sql .= "   AND BusinessStudyContents.is_deleted = 0";

        $studyData = $conn->query($sql)->fetch('assoc');

        $this->set('studyData', $studyData);
        $this->set('pageTitle', $studyData['business_study_contents__name'] . ' - 学習コンテンツ詳細');
        $this->set('viewDir', $this->Define::BUSINESS_CONTENTS_VIEW_DIR);
        $this->set('detailTemp', $this->Define::BUSINESS_CONTENTS_DIR . 'detail' . $id);
    }
}
