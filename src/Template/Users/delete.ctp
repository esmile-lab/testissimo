<?php
?>

<!-- Content Header (Page header) -->
<!--
<section class="content-header">
  <h1>ユーザー</h1>
</section>
-->
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="box-shadow">
        <div class="box-header with-border">
          <div class="box-header__wrapper-b">
            <h2 class="box-title"><i class="fa fa-user-times"></i>&ensp;退会処理</h2>
          </div>
        </div>
        <div><br></div>

        <div class="box-body">
          <div class="form-group">
            <p>退会処理を行うと、アップロードしたファイルやメールなど全ての会員情報が削除され、ログインできなくなります。<br><br></p>
            <p>よろしければ、下のボタンから退会処理の手続きを行ってください。</p>
          </div>

          <div class="box-footer">
            <button type="button" class="linkBtn_s box-color-dr" onclick="deleteAction();">退会する</button>
          </div>
          <input type="hidden" name="id" id="id" value="<?= $this->request->session()->read('loginUser.id'); ?>" >
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->