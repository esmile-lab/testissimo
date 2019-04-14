<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * GameStudyContentsController Controller
 *
 * @property \App\Model\Table\GameStudyContentsTable $GameStudyContents
 *
 * @method \App\Model\Entity\GameStudyContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GameStudyContentsController extends AppController
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
        $sql .= "SELECT GameStudyContents.id AS game_study_contents__id,";
        $sql .= "       GameStudyContents.game_study_category_id AS game_study_contents__game_study_category_id,";
        $sql .= "       GameStudyContents.name AS game_study_contents__name,";
        $sql .= "       GameStudyContents.sub_name AS game_study_contents__sub_name,";
        $sql .= "       GameStudyContents.level AS game_study_contents__level";
        $sql .= "  FROM game_study_contents AS GameStudyContents";
        $sql .= " WHERE GameStudyContents.id  = " . $id;
        $sql .= "   AND GameStudyContents.is_deleted = 0";

        $studyData = $conn->query($sql)->fetch('assoc');

        $this->set('studyData', $studyData);
        $this->set('pageTitle', $studyData['game_study_contents__name'] . ' - 学習コンテンツ詳細');
        $this->set('viewDir', $this->Define::GAME_CONTENTS_VIEW_DIR);
        $this->set('detailTemp', $this->Define::GAME_CONTENTS_DIR . 'detail' . $id);
    }
}
