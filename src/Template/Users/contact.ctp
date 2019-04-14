<?php
?>

 <?php
?>

<!-- Content Header (Page header) -->
<!--
<section class="content-header">
  <h1>お問い合わせ</h1>
</section>
-->
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="box-shadow">
        <div class="box-header with-border">
          <div class="box-header__wrapper-b">
            <h2 class="box-title"><i class="fa fa-envelope"></i>&ensp;お問い合わせ</h2>
          </div>
        </div>
        <div class="box-body">
        <?= $this->Form->create($user) ?>

          <div class="form-group">
            <p>教材に関する質問やシステムの使い方など、ご質問内容を入力してください。</p>
            <p>後日、担当者より回答のご連絡をさせて頂きます。</p>
          </div>

          <div class="form-group">
            <label for="title">ユーザー名</label>
            <div class="input text required">
              <input type="text" name="user_name" class="form-control users-input__text" id="user-name" value="<?= h($user->last_name . ' ' . $user->first_name)?>" readonly>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label for="title">メールアドレス</label>
            <div class="input text required">
              <input type="text" name="mail1" class="form-control users-input__text" id="mail1" value="<?= h($user->mail1) ?>" readonly>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label for="title">件名<span class="common__input--required">＊</span></label>
            <div class="input text required">
              <input type="text" name="title" class="form-control users-input__text" id="title" value="" placeholder="件名を入力">
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label for="comment">お問い合わせ内容<span class="common__input--required">＊</span></label>
            <p><textarea name="comment" id="comment" class="users-input__textarea" rows="10" placeholder="お問い合わせ内容を入力"></textarea></p>
            <div class="clearfix"></div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="button" class="linkBtn_s box-color-db" onclick="contactAction();">送信する</button>
          </div>
          <input type="hidden" name="id" value="<?= h($user->id) ?>" >

        <?= $this->Form->end() ?>  
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->