<!DOCTYPE html>
<html lang="ja">
<head>
  <?= $this->element('include_head'); ?>
</head>
<body onload="<?= ucfirst($this->request->params['controller']) ?><?= ucfirst($this->request->params['action']) ?>Component()">

<div class="login-header"></div>
  <div class="login-box login-container">
    <div class="login-logo"></div>
    <div class="login-box-body">
      <div class="login-container-passf">
        <p>
          <b>セッション情報が確認できない為、自動的にログアウトされました。</b>
          （603 error）
        </p>
        <p>ログイン画面から操作を行ってください。</p>
        <p><a href="login/">ログイン画面へ</a></p>
      </div>
    </div>
  </div>
  <div id="izi_modal" data-izimodal-title=""></div>
  <div class="login-footer"></div>
  
  <?= $this->element('include_js'); ?>
</body>
</html>