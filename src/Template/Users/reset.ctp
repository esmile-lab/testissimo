<!DOCTYPE html>
<html lang="ja">
<head>
  <?= $this->element('include_head'); ?>
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body onload="<?= ucfirst($this->request->params['controller']) ?><?= ucfirst($this->request->params['action']) ?>Component()" class="hold-transition login-page" style="height: auto; min-height: 100%;">

<div class="bg_login  bg_add">
  <div class="container">

    <div class="uploadLink" style="margin-top:5px;">
      <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'login']) ?>" class="btn box-color-gr">戻る</a>
    </div>

    <!-- Main content -->
    <section class="content container-fluid reset-bg" style="margin-top:5px;">
      <div class="row">
        <div class="box">
          <div class="box-header with-border">
            <div class="box-header__wrapper-b">
              <h2 class="box-title"><i class="fa fa-lock"></i>&ensp;パスワード再設定</h2>
            </div>
          </div>

          <div class="box-body">
          <?php if($type == 'mail'): ?>
            <div class="form-group">
              <p>パスワードを再設定する為のメールアドレスを入力してください。</p> 
            </div>
            <div class="form-group">
              <label for="mail1">ログインID／メールアドレス<span class="common__input--required">＊</span></label>
              <div class="input text required">
                <input type="text" name="mail1" class="form-control" required="required" maxlength="128" id="mail1" placeholder="メールアドレスを入力" value="">
              </div>
            </div>

            <div class="box-footer">
              <button type="button" class="linkBtn_s box-color-db" onclick="sendAction();">メールを送信する</button>
            </div>

          <?php elseif($type == 'edit'): ?>
            <div class="form-group">
              <p>パスワードを入力して再設定を行ってください。</p> 
            </div>
            <div class="form-group">
              <label for="password">
                パスワード<span class="common__input--required">＊</span>
              </label>
            <div class="input text required">
              <input type="password" name="password" class="form-control" required="required" maxlength="16" id="password" placeholder="8文字以上16文字以内の半角英数で入力" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="password">
              パスワード（確認用）<span class="common__input--required">＊</span>
            </label>
            <div class="input text required">
              <input type="password" id="password2" maxLength="16" class="form-control" placeholder="8文字以上16文字以内の半角英数で入力" value="" >
            </div>
          </div>

          <div class="box-footer">
            <button type="button" class="linkBtn_s box-color-db" onclick="editAction();">パスワードを設定する</button>
          </div>
          <input type="hidden" name="user_id" id="user-id" value="<?= $id?>">
        <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<div id="izi_modal" data-izimodal-title=""></div>
<div class="login-footer"></div>
  
  <?= $this->element('include_js'); ?>
</body>
</html>