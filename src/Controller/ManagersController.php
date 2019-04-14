<?php
namespace App\Controller;

use App\Controller\AppController;
use PHP_CodeSniffer\Reports\Json;
use Cake\Core\Exception\Exception;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;
use PhpParser\Node\Expr\Array_;

/**
 * Managers Controller
 *
 * @property \App\Model\Table\ManagersTable $Managers
 *
 * @method \App\Model\Entity\Manager[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ManagersController extends AppController
{
    /**
     * Initialize method
     * 
     * @see \App\Controller\AppController::initialize()
     */
    public function initialize()
    {
        parent::initialize();
    }
    
    /**
     * Login method
     *
     * @return \Cake\Http\Response|void
     */
    public function login()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('pageTitle', 'ログイン');
    }
    
    /**
     * Logout method
     *
     * @return \Cake\Http\Response|void
     */
    public function logout()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('pageTitle', '　自動ログアウト');
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $managers = $this->paginate($this->Managers);
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set(compact('managers'));
    }

    /**
     * Signup method
     *
     * @return
     */
    public function signup()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('pageTitle', '管理ユーザー本登録');
        
        $this->set('success', 1);
        
        $id      = $this->request->query('id');
        $manager = $this->Managers->get($id, [
            'contain' => []
        ]);
        
        if (!$manager){
            return;
        }
        
        if ($manager->is_added === 1) {
            $this->set('success', 2);
            return;
        }
        
    }
    /**
      * Password reset method
      * 
      * @return
     */
    public function reset()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('pageTitle', 'パスワード再設定');
        
        $type = $this->request->query('type');
        $this->set('type', $type);
        $id = $this->request->query('id');
        $this->set('id', $id);
    }
    
    /**
     * View method
     *
     * @param string|null $id Manager id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $manager = $this->Managers->get($id, [
            'contain' => []
        ]);

        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('manager', $manager);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $manager = $this->Managers->newEntity();
        if ($this->request->is('post')) {
            $manager = $this->Managers->patchEntity($manager, $this->request->getData());
            if ($this->Managers->save($manager)) {
                $this->Flash->success(__('データが保存されました。'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('データが保存されませんでした。もう一度お試しください。'));
        }
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set(compact('manager'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Manager id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $manager = $this->Managers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $manager = $this->Managers->patchEntity($manager, $this->request->getData());
            if ($this->Managers->save($manager)) {
                $this->Flash->success(__('データが保存されました。'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('データが保存されませんでした。もう一度お試しください。'));
        }
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set(compact('manager'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Manager id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $manager = $this->Managers->get($id);
        if ($this->Managers->delete($manager)) {
            $this->Flash->success(__('データが削除されました。'));
        } else {
            $this->Flash->error(__('データが削除できませんでした。もう一度お試しください。'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    /** API ajax **/
    
    /**
     * ajLogin method API
     * 
     * @return Json
     */
    public function ajLogin()
    {
        // 自動で描画メソッドを呼び出さないように指定
        $this->autoRender = false;
       // jsonがResponseに組み込まれていないコンテンツの為、追加
        $this->response->type('application/json');

        // リクエストがajaxでない場合の処理
        if (!$this->request->is("ajax")) {
            // 'responseData' => 'error' にエラー情報の配列を格納（エラーコード（600）、エラーメッセージ）
            $this->responseData['error'] = array('code' => 600, 'message' => $this->convertErrorMessage(600));
            // 日本語を含む文字列部分が文字コード表示されないようにする処理しresponseに書き込む
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        // リクエストが空の場合の処理
        if (!$this->requestData) {
            $this->responseData['error'] = array('code' => 601, 'message' => $this->convertErrorMessage(601));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        // query文の発行（削除フラグが設定されておらず、メールデータ（ログインID）が存在するレコードを検索）
        $query = $this->Managers->find()->where([
            'Managers.mail1'    => $this->requestData['mail1'],
            'Managers.is_deleted'=> 0
        ]);

        // テスト用にDBをUsersへ変更して作成
/*        $query = $this->Users->find()-where([
            'Users.mail1'       => $this->requestData['mail1'],
            'Users.is_deleted'  => 0
        ]);
*/      
        // レコードが存在しない場合
        if ($query->count() === 0) {
            $this->responseData['error'] = array('code' => 602, 'message' => $this->convertErrorMessage(602));
        // queryの戻りレコード数が２以上の場合
        } else if ($query->count() > 1) {
            $this->responseData['error'] = array('code' => 900, 'message' => $this->convertErrorMessage(900));
        // 問題ない場合、配列に変換してManagersDataに格納
        } else {
            $ManagersData = $query->toArray();
            
            // レコード配列に含まれる登録済みパスワードとリクエストに含まれるパスワードを比較しFalseならエラーを返す
            //if (!password_verify($this->requestData['password'], $ManagersData[0]->password)) {
            if (!($this->requestData['password'] == $ManagersData[0]->password)) {
                $this->responseData['error'] = array('code' => 602, 'message' => $this->convertErrorMessage(602));
                $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
                return;
            }
            
            // セッションデータにセッション情報を書き込む
            $this->request->session()->write([
                'loginManager.id'       => $ManagersData[0]->id,
                'loginManager.name'     => $ManagersData[0]->last_name.' '.$ManagersData[0]->first_name,
                'loginManager.mail1'    => $ManagersData[0]->mail1,
                'loginManager.auth'     => $ManagersData[0]->auth
            ]);
           // save()を使い、CakePHPのバリデーション検証を行う
            // データが保存されなかった場合に、エラー配列データをresponseに書き込む
            if (!$this->Managers->save($ManagersData[0])) {
                $this->responseData['error'] = array('code' => 801, 'message' => $this->convertErrorMessage(801));
                $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
                return;
            }
            // 結果が問題ない場合に'success'を返す
            $this->responseData['success'] = 0;

        }
        
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }

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
            $this->responseData['error']  = array('code' => 600, 'message' =>$this->convertErrorMessage(600));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        if (!$this->requestData) {
            $this->responseData['error']  = array('code' => 601, 'message' =>$this->convertErrorMessage(601));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        
        // query文の発行（削除フラグが設定されておらず、メールデータ（ログインID）が存在するレコードを検索）
        $query = $this->Managers->find()->where([
            'Managers.mail1'    => $this->requestData['mail1'],
            'Managers.is_deleted'=> 0
        ]);

        if ($query->count() > 0) {
            $this->responseData['error'] = array('code' => 804, 'message' =>$this->convertErrorMessage(804));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        
        $this->requestData['password']         = password_hash($this->requestData['password'], PASSWORD_DEFAULT);
        $this->requestData['mail1']            = '';
        $this->requestData['auth']             = 1;
        $this->requestData['is_deleted']       = 0;
        $this->requestData['create_manager']   = '';
        $this->requestData['create_at']        = date('Y-m-d H:i:s');
        $this->requestData['update_manager']   = '';
        $this->requestData['update_at']        = '';
        
        $manager = $this->Managers->newEntity();
        $manager = $this->Managers->patchEntity($user, $this->requestData, ['validate' => false]);
        try {
            if ($this->Managers->save($manager)) {
                $this->responseData['success'] = 0;
                // mail
                $email = new ManagerEmail('default');
                $email->addMail($manager);
            } else {
                $this->responseData['error']  = array('code' => 801, 'message' =>$this->convertErrorMessage(801));
            }
        } catch (Exception $e) {
            $this->responseData['error']  = array('code' => 801, 'message' =>$this->convertErrorMessage(801));
        }
        
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }
}
