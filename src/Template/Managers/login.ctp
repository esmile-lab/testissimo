<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->element('include_head'); ?>
</head>
<body onload="<?= ucfirst($this->request->params['controller']) ?><?= ucfirst($this->request->params['action']) ?>Component()" class="hold-transition login-page" style="height: auto; min-height: 100%;">

    <div class="bg_login_mj" style="height: 100vh;">
        <div class="login-box_mj">
            <div class="login-logo">
                <a href="" class="logo">
                    <img src="<?=$this->url->image('Component/Commons/logo_w.png');?>" alt="fortissimoロゴ">
                </a>
            </div>
            <div class="login-box-body_mj">
                <div class="login_a">
                    <p><b>管理用ページ</b></p>
                </div>
                <form name="loginForm" method="post" action="./">
                    <div class="form-group has-feedback">
                        <input type="text" id="signId" class="form-control" placeholder="ユーザーID/メールアドレス"
                        onkeypress="javascript:if(event.keycode==13) loginAction();"/>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" id="signPass" name="shingPass" class="form-control" placeholder="パスワード"
                        onkeypress="javascript:if(event.keyCode==13) loginAction();"/>
                    </div>
                    <div class="row">
                        <div class="login-btn">
                            <button type="button" class="btn btn-primary btn-block btn-flat" onclick="loginAction();">ログイン</button>
                        </div>
                    </div>
                </form>
                <br>

<!--
                <div class="login_a">
                    <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'add']) ?>">
                        <i class="fa fa-user-plus"></i> 新規登録の方はこちら 
                    </a>
                    <br>
                    <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'reset', 'type' => 'mail']) ?>">
                        <i class="fa fa-question-circle"></i> パスワードをお忘れの方はこちら
                    </a>
                </div>
-->             
            </div>
            <div>
                <small>Copyright © 2019 E-SMILE. Co. Ltd. All Rights Reserved.</small>
            </div>
        </div>
        <div id="izi_modal" data-izimodal-title="">
        </div>
    </div>
    
    
    <?= $this->element('include_js'); ?>
</body>
</html>