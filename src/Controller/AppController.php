<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    const SYSTEM_DOWNLOAD_PATH         = 'Data/download/SystemContents/contents/';
    const SYSTEM_DOWNLOAD_ANSWER_PATH  = 'Data/download/SystemContents/contents_answer/';
    const SYSTEM_UPLOAD_PATH           = 'Data/upload/Users/';

    const CONTENTS_HEADER_COLOR = array('o', 'g', 'dg', 'b', 'db', 'p', 'do', 'dr', 'k', 'r');
    const SYSTEM_UPLOAD_STATUS =  array('未提出', '確認中', '提出済', '再提出');

    public $requestData        = array();
    public $responseData       = array('success' => 1);
    public $isEnableBack       = false;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Define');

        $this->viewBuilder()->setLayout('adminLTE');
        $this->requestData = $this->request->getData();

        $this->BusinessCourseCategories = TableRegistry::get('BusinessCourseCategories');
        $this->GameCourseCategories     = TableRegistry::get('GameCourseCategories');

        $this->set('isEnableBack', $this->isEnableBack);
        $this->set('courseCategory', $this->getCourseCategory());
    }

    /**
     * sessionCheck method 
     *
     * @return 
     */
    public function sessionCheck()
    {
        if (!$this->request->session()->read('loginUser')) {
            return $this->redirect(['controller' => 'users', 'action' => 'logout']);
        }
    }

    /**
     * sessionUserCheck method
     * 
     * @param $id User id.
     * @return
     */
    public function sessionUserCheck($id)
    {
        if ($id != $this->request->session()->read('loginUser.id')) {
            return $this->redirect(['controller' => 'users', 'action' => 'logout']);
        }
    }

    /**
     * ajSessionCheck method API
     *
     * @return json
     */
    public function ajSessionCheck()
    {
        $this->autoRender = false;
        $this->response->type('application/json');
        
        if ($this->request->session()->read('loginUser')) {
            $this->responseData['error'] = array('code' => 603, 'msseage' =>$this->convertErrorMessage(603));
        } else {
            $this->responseData['success'] = 0;
        }
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }

    /**
     * getCourseCategory method
     * 
     * @return Array
     */
    public function getCourseCategory()
    {
        $courseCategory = [];

        $courseCategory[] = $this->GameCourseCategories->find()->where(['GameCourseCategories.is_deleted' => 0])->toList();
        $courseCategory[] = $this->BusinessCourseCategories->find()->where(['BusinessCourseCategories.is_deleted' => 0])->toList();

        return $courseCategory;
    }

    /**
     * convertErrorMessage method API
     * 
     * @param $code  Error code
     * @return string
     */
    public function convertErrorMessage($code) {
        switch ($code) {
            case 600:
                return '不正なアクセスです';
            case 601:
                return 'パラメータが不正です';
            case 602:
                return 'メールアドレスまたは<br>パスワードが違います。';
            case 603:
                return 'セッション情報が確認できない為、<br>自動的にログアウトされました';
            case 700:
                return '通信時にエラーが発生しました';
            case 701:
                return 'ファイルエラーが発生しました。';
            case 702:
                return 'ファイルサイズが不正です';
            case 703:
                return 'ファイル拡張子が不正です';
            case 800:
                return 'データベースエラーが発生しました';
            case 801:
                return 'データの登録に失敗しました';
            case 802:
                return 'データの更新に失敗しました';
            case 803:
                return 'データの削除に失敗しました';
            case 804:
                return '入力したメールアドレスはすでに登録されています<br>他のメールアドレスをご利用ください';
            case 805:
                return '変更前のパスワードが一致しません';
            case 806:
                return '本登録の有効期間が過ぎています';
            case 807:
                return '入力したメールアドレスが登録されていません<br>メールアドレスを確認してください';
            case 808:
                return '再設定の有効期間が過ぎています';
            case 809:
                return 'このユーザーは本登録が完了しています';
            case 900:
                return '致命的なエラーが発生しました<br>運営会社にお問い合せください';
            default:
                return '予期せぬエラーが発生しました';
        }
    }
}
