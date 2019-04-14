<!DOCTYPE html>
<html lang="ja">
<head>
  <?= $this->element('include_head'); ?>
</head>
<body onload="<?= ucfirst($this->request->params['controller']) ?><?= ucfirst($this->request->params['action']) ?>Component()"　class="hold-transition login-page" style="height: auto; min-height: 100%;">

  <div class="bg_login" style="height: 100vh;">
    <div class="login-box">
      <div class="login-logo">
        <a href="" class="logo">
          <img src="<?=$this->Url->image('Component/Commons/logo_w.png');?>" alt="fortissimoロゴ"> 
        </a>
      </div>
      <div class="login-box-body">
        <form name="loginForm" method="post" action="./">
          <div class="form-group has-feedback">
            <input type="text" id="signId" name="signId" class="form-control" placeholder="ユーザーID／メールアドレス" onkeypress="javascript:if(event.keyCode==13) loginAction();"/>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="signPass" name="signPass" class="form-control" placeholder="パスワード" onkeypress="javascript:if(event.keyCode==13) loginAction();"/>
          </div>
          <div class="row">
            <div class="login_btn">
              <button type="button" class="btn btn-primary btn-block btn-flat" onclick="loginAction();">ログイン</button>
            </div>
          </div>
        </form>
        <div class="login_a">
          <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'add']) ?>">
            <i class="fa fa-user-plus"></i> 新規登録の方はこちら 
          </a>
          <br>
          <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'reset', 'type' => 'mail']) ?>">
            <i class="fa fa-question-circle"></i> パスワードをお忘れの方はこちら
          </a>
        </div>
      </div>
        <div>
            <small>&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2019 E-SMILE. Co. Ltd. All Rights Reserved.</small>
        </div>
    </div>
    <div id="izi_modal" data-izimodal-title=""></div>
  </div>
  


  <?= $this->element('include_js'); ?>
</body>
</html>