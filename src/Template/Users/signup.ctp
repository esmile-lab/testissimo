<!DOCTYPE html>
<html lang="ja">
<head>
  <?= $this->element('include_head'); ?>
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body class="hold-transition login-page" style="height: auto; min-height: 100%;">

<div class="bg_login bg_add">
  <div class="container">

    <!-- Main content -->
    <section class="content container-fluid reset-bg">
      <div class="row">
        <div class="box">
          <div class="box-header with-border">
            <div class="box-header__wrapper-b">
              <h2 class="box-title"><i class="fa fa-user-plus"></i>&ensp;ユーザー本登録</h2>
            </div>
          </div>
          
          <div class="box-body">
            <?php if($success === 0): ?>
            <div class="form-group">
              <p>
                <b>本登録が完了しました。</b>
              </p> 
              <p>ログイン画面からログインしてください。</p>
            </div>

            <?php elseif($success === 1): ?>
            <div class="form-group">
              <p>
                <b>本登録の有効期間が過ぎています。</b>（806 error）
              </p> 
              <p>再度新規登録画面から仮登録を行ってください。</p>
            </div>

            <?php elseif($success === 2): ?>
            <div class="form-group">
              <p>
                <b>このユーザーは本登録が完了しています。</b>
              </p> 
              <p>ログイン画面からログインしてください。</p>
            </div>
            <?php endif; ?>

            <div class="form-group">
              <a href="login/">ログイン画面へ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div id="izi_modal" data-izimodal-title=""></div>
<div class="login-footer"></div>
  
  <?= $this->element('include_js'); ?>
</body>
</html>