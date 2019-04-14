<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Mailer\UserEmail;
use Cake\Core\Exception\Exception;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;
use PhpParser\Node\Expr\Array_;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
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
         $this->set('pageTitle', '  自動ログアウト');
     }
    

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('pageTitle', 'ユーザー新規登録');
        
        $user = $this->Users->newEntity();
        $schools = $this->Users->Schools->find('list');
        $this->set(compact('user', 'schools'));
    }
    
    /**
     * Signup method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function signup()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->set('pageTitle', 'ユーザー本登録');

        $this->set('success', 1);

        $id = $this->request->query('id');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        if (!$user) {
            return;
        }

        if ($user->is_added === 1) {
            $this->set('success', 2);
            return;
        }

        $closeDate = new Time('-1 day');
        $insertDate = new Time($user->create_at);
        if(strtotime($closeDate) > strtotime($insertDate)) {
            return;
        }

        $user->is_added = 1;
        $user->update_user = $id;
        $user->update_at = date('Y-m-d H:i:s');
        try {
            if ($this->Users->save($user)) {
                $this->set('success', 0);
                // mail
                $email = new UserEmail('default');
                $email->signupMail($user);
            }
        } catch (Exception $e) {}
    }

    /**
     * Password reset method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
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
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->sessionCheck();
        $this->sessionUserCheck($id);
        
        $this->set('pageTitle', 'ユーザー-登録情報');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set("graduation_year", $user->graduation_year);
        $this->set("graduation_month", $user->graduation_month);

        $school = $this->Users->Schools->find('list');
        $schools = $school->toArray();
        $schools = array('0' => '該当無し') + $schools;
        $this->set(compact('user', 'schools'));
    }

    /**
     * Contact method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function contact($id = null)
    {
        $this->sessionCheck();
        $this->sessionUserCheck($id);

        $this->set('pageTitle', 'ユーザー-お問い合わせ');

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
    }
    

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->sessionCheck();
        $this->sessionUserCheck($id);
        
        $this->set('pageTitle', 'ユーザー-退会処理');
    }


    /** API ajax **/
    
    /**
     * ajLogin method API
     *
     * @return json
     */
    public function ajLogin()
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

        $query = $this->Users->find()->where([
            'Users.mail1'     => $this->requestData['mail1'],
            'Users.is_added'  => 1,
            'Users.is_deleted'=> 0
        ]);
             
        if ($query->count() === 0) {
            $this->responseData['error'] = array('code' => 602, 'msseage' =>$this->convertErrorMessage(602));
        } else if ($query->count() > 1) {
            $this->responseData['error'] = array('code' => 900, 'msseage' =>$this->convertErrorMessage(900));
        } else {
            $UsersData = $query->toArray();

            if(!password_verify($this->requestData['password'], $UsersData[0]->password)) {
                $this->responseData['error']  = array('code' => 602, 'msseage' =>$this->convertErrorMessage(602));
                $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
                return;
            }

            $lastLogin = is_null($UsersData[0]->last_login_at) ? null : $UsersData[0]->last_login_at->i18nFormat('YYYY年MM月dd日 HH:mm:ss', 'Asia/Tokyo');
            $this->request->session()->write([
                'loginUser.id'            => $UsersData[0]->id,
                'loginUser.name'          => $UsersData[0]->last_name. ' '.$UsersData[0]->first_name,
                'loginUser.mail1'         => $UsersData[0]->mail1,
                'loginUser.last_login_at' => $lastLogin,
                'loginUser.auth'          => $UsersData[0]->auth
            ]);

            $UsersData[0]->last_login_at  = date('Y-m-d H:i:s');
            if (!$this->Users->save($UsersData[0])) {
                $this->responseData['error']  = array('code' => 801, 'msseage' =>$this->convertErrorMessage(801));
                $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
                return;
            }

            $this->responseData['success'] = 0;
        }
        
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }

    /**
     * ajLogout method API
     *
     * @return json
     */
    public function ajLogout()
    {
        $this->autoRender = false;
        $this->response->type('application/json');

        if (!$this->request->is("ajax")) {
            $this->responseData['error']  = array('code' => 600, 'msseage' =>$this->convertErrorMessage(600));
        } else {
            $this->request->session()->destroy();
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
            $this->responseData['error']  = array('code' => 600, 'msseage' =>$this->convertErrorMessage(600));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        if (!$this->requestData) {
            $this->responseData['error']  = array('code' => 601, 'msseage' =>$this->convertErrorMessage(601));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        
        // mail exist check
        $query = $this->Users->find()->where([
            'Users.mail1'     => $this->requestData['mail1'],
            'Users.is_added'  => 1,
            'Users.is_deleted'=> 0
        ]);
        if ($query->count() > 0) {
            $this->responseData['error'] = array('code' => 804, 'msseage' =>$this->convertErrorMessage(804));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }

        $this->requestData['password']         = password_hash($this->requestData['password'], PASSWORD_DEFAULT);
        $this->requestData['mail2']            = '';
        $this->requestData['tel1']             = '';
        $this->requestData['tel2']             = '';
        $this->requestData['sex']              = '';
        $this->requestData['birthday']         = '';
        $this->requestData['school_id']        = '';
        $this->requestData['graduation_year']  = '';
        $this->requestData['graduation_month'] = '';
        $this->requestData['zip']              = '';
        $this->requestData['prefecture']       = '';
        $this->requestData['city']             = '';
        $this->requestData['building']         = '';
        $this->requestData['auth']             = 1;
        $this->requestData['is_added']         = 0;
        $this->requestData['is_deleted']       = 0;
        $this->requestData['create_user']      = '';
        $this->requestData['create_at']        = date('Y-m-d H:i:s');
        $this->requestData['update_user']      = '';
        $this->requestData['update_at']        = '';

        $user = $this->Users->newEntity();
        $user = $this->Users->patchEntity($user, $this->requestData, ['validate' => false]);
        try {
            if ($this->Users->save($user)) {
                $this->responseData['success'] = 0;
                // mail
                $email = new UserEmail('default');
                $email->addMail($user);
            } else {
                $this->responseData['error']  = array('code' => 801, 'msseage' =>$this->convertErrorMessage(801));
            }
        } catch (Exception $e) {
            $this->responseData['error']  = array('code' => 801, 'msseage' =>$this->convertErrorMessage(801));
        }

        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function ajEdit()
    {
        $this->sessionCheck();
        $this->sessionUserCheck($this->requestData['id']);

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

        $user = $this->Users->get($this->requestData['id'], [
            'contain' => []
        ]);
            
        if ($this->requestData['password_flg'] === '0') {
            $this->requestData['password'] = $user->password;
        } else if ($this->requestData['password_flg'] == '1') {
            if(!password_verify($this->requestData['origin_password'], $user->password)) {
                $this->responseData['error']  = array('code' => 805, 'msseage' =>$this->convertErrorMessage(805));
                $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
                return;
            }
            $this->requestData['password'] = password_hash($this->requestData['password'], PASSWORD_DEFAULT);
        }

        $this->requestData['graduation_year']  = $this->requestData['graduation']['year'];
        $this->requestData['graduation_month'] = $this->requestData['graduation']['month'];
        $user = $this->Users->patchEntity($user, $this->requestData, ['validate' => false]);

        $user->update_user = $this->requestData['id'];
        $user->update_at   = date('Y-m-d H:i:s');
            
        try {
            if ($this->Users->save($user)) {

                $this->request->session()->write([
                    'loginUser.name'  => $user->last_name. ' '.$user->first_name,
                ]);
                $this->responseData['success'] = 0;
                $this->responseData['id']      = $user->id;
            } else {
                $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
            }
        } catch (Exception $e) {
            $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
        }

        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
        return;
    }

    /**
     * Contact method API
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ajContact()
    {
        $this->sessionCheck();
        $this->sessionUserCheck($this->requestData['id']);

        $this->autoRender = false;
        $this->response->type('application/json');

        $user = $this->Users->get($this->requestData['id'], [
            'contain' => []
        ]);
        $title = $this->requestData['title'];
        $comment = $this->requestData['comment'];
        // mail
        $email = new UserEmail('default');
        $email->contactMail($user, $title, $comment);

        $this->responseData['success'] = 0;

        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }

    /**
     * Delete method API
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ajDelete()
    {
        $this->sessionCheck();
        $this->sessionUserCheck($this->requestData['id']);
        
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

        $user = $this->Users->get($this->requestData['id'], [
            'contain' => []
        ]);
            
        $user = $this->Users->patchEntity($user, $this->requestData, ['validate' => false]);
        $user->is_deleted  = 1;
        $user->update_user = $this->requestData['id'];
        $user->update_at   = date('YmdHis');

        try {
            if ($this->Users->save($user)) {
                $this->request->session()->destroy();
                $this->responseData['success'] = 0;
            } else {
                $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
            }
        } catch (Exception $e) {
            $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
        }
        
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }
    
    /**
     * ajPassword mail method API
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function ajPasswordMail()
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
        
        // mail exist check
        $query = $this->Users->find()->where([
            'Users.mail1'     => $this->requestData['mail1'],
            'Users.is_added'  => 1,
            'Users.is_deleted'=> 0
        ]);
        if ($query->count() === 0) {
            $this->responseData['error'] = array('code' => 807, 'msseage' =>$this->convertErrorMessage(807));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        
        $userData = $query->toArray();
        
        $user = $this->Users->get($userData[0]->id, [
            'contain' => []
        ]);
        
        $user->update_user = $userData[0]->id;
        $user->update_at = date('Y-m-d H:i:s');
        try {
            if ($this->Users->save($user)) {
                $this->responseData['success'] = 0;
                // mail
                 $email = new UserEmail('default');
                 $email->passwordResetMail($user);
            } else {
                $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
            }
        } catch (Exception $e) {
            $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
        }
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }

    /**
     * ajPassword edit method API
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function ajPasswordEdit()
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

        $user = $this->Users->find()->where([
            'Users.id'        => $this->requestData['id'],
            'Users.is_added'  => 1,
            'Users.is_deleted'=> 0
        ])->first();
        if (!$user) {
            $this->responseData['error'] = array('code' => 600, 'msseage' =>$this->convertErrorMessage(600));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }

        $closeDate = new Time('-1 day');
        $updateDate = new Time($user->update_at);
        if(strtotime($closeDate) > strtotime($updateDate)) {
            $this->responseData['error']  = array('code' => 808, 'msseage' =>$this->convertErrorMessage(808));
            $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
            return;
        }
        
        $user->password    = password_hash($this->requestData['password'], PASSWORD_DEFAULT);
        $user->update_user = $user->id;
        $user->update_at   = date('Y-m-d H:i:s');
        try {
            if ($this->Users->save($user)) {
                $this->responseData['success'] = 0;
                // mail
                 $email = new UserEmail('default');
                 $email->passwordSetMail($user);
            } else {
                $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
            }
        } catch (Exception $e) {
            $this->responseData['error']  = array('code' => 802, 'msseage' =>$this->convertErrorMessage(802));
        }
        $this->response->getBody()->write(json_encode($this->responseData, JSON_UNESCAPED_UNICODE));
    }
}
