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
            <h2 class="box-title"><i class="fa fa-address-card"></i>&ensp;登録情報</h2>
          </div>
        </div>
        <div><br></div>
        <?= $this->Form->create($user, ['class' => 'user-change']) ?>
          <div class="box-body">
            <div class="form-group">
              <label for="mail1">ログインID／メールアドレス<span class="common__input--required">＊</span></label>
              <?= $this->Form->control('mail1', [
                  'type' => 'text',
                  'label' => false,
                  'disabled' => 'disabled',
                  'class' => 'form-control'
              ]); ?>
              <input type="hidden" name="mail1" value="<?= h($user->mail1) ?>" >
            </div>
            <div name="password_toggle">
              <div class="form-group">
                <button type="button" class="btn btn-danger" onclick="changePassword(1);">パスワードを変更する</button>
              </div>
            </div>
            <div name="password_toggle" style="display:none;">
              <div class="form-group">
                <button type="button" class="btn btn-primary" onclick="changePassword(0);">元に戻す</button>
              </div>
              <div class="form-group">
                <label for="origin_password">
                  変更前パスワード<span class="common__input--required">＊</span>
                </label>
                <div class="input text">
                  <input type="text" name="origin_password" class="form-control users-password__input" required="required" maxlength="16" id="origin-password" placeholder="8文字以上16文字以内の半角英数で入力" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="password">
                 変更後パスワード<span class="common__input--required">＊</span>
                </label>
                <?= $this->Form->control('password', [
                    'type' => 'password',
                    'label' => false,
                    'maxLength' => 16,
                    'class' => 'form-control users-password__input',
                    'placeholder' => '8文字以上16文字以内の半角英数で入力',
                    'value' => ''
                ]); ?>
              </div>
              <div class="form-group">
                <label for="password">
                  変更後パスワード（確認用）<span class="common__input--required">＊</span>
                </label>
                <input type="password" id="password2" maxLength="16" class="form-control users-password__input" placeholder="8文字以上16文字以内の半角英数で入力" value="" >
              </div>
            </div>
            <input type="hidden" name="password_flg" id="password-flg" value="0" >
            <div class="form-group">
              <label for="last_name">
                ユーザー名<span class="common__input--required">＊</span>
              </label>
              <div class="input text required">
                <input type="text" name="last_name" class="form-control users-all-name__input" required="required" maxlength="32" id="last-name" placeholder="名字" value="<?= h($user->last_name) ?>">
              </div>
              <div class="input text required">
                <input type="text" name="first_name" class="form-control users-all-name__input" required="required" maxlength="32" id="first-name" placeholder="名前" value="<?= h($user->first_name) ?>">
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="form-group">
              <label for="last_name">
                ユーザー名カナ<span class="common__input--required">＊</span>
              </label>
              <div class="input text required">
                <input type="text" name="last_kana" class="form-control users-all-name__input" required="required" maxlength="32" id="last-kana" placeholder="名字" value="<?= h($user->last_kana) ?>">
              </div>
              <div class="input text required">
                <input type="text" name="first_kana" class="form-control users-all-name__input" required="required" maxlength="32" id="first-kana" placeholder="名前" value="<?= h($user->first_kana) ?>">
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="form-group">
              <label for="mail2">メールアドレス（予備）</label>
              <?= $this->Form->control('mail2', [
                  'type' => 'text',
                  'label' => false,
                  'required'=>false,
                  'class' => 'form-control'
              ]); ?>
            </div>
            <div class="form-group">
              <label for="tel1">電話番号</label>
              <?= $this->Form->control('tel1', [
                  'type' => 'text',
                  'label' => false,
                  'required'=>false,
                  'maxlength' => 11,
                  'class' => 'form-control',
                  'placeholder' => '数値のみで入力'
              ]); ?>
            </div>
            <div class="form-group">
              <label for="tel2">電話番号（予備）</label>
              <?= $this->Form->control('tel2', [
                  'type' => 'text',
                  'label' => false,
                  'required'=>false,
                  'maxlength' => 11,
                  'class' => 'form-control',
                  'placeholder' => '数値のみで入力'
              ]); ?>
            </div>
            <div class="form-group">
              <label for="sex">性別</label>
              <p>
              <?= $this->Form->radio('sex', [
                  ['value' => '0', 'text' => '男', 'class' => 'minimal'],
                  ['value' => '1', 'text' => '女', 'style' => 'margin-left:10px;', 'class' => 'minimal']
               ]); ?>
               </p>
            </div>
            <div class="form-group">
              <label for="birthday">生年月日</label>
              <?=
              $this->Form->control('birthday', [
                  'label' => false,
                  'maxYear' => date('Y'),
                  'minYear' => date('Y') - 100,
                  'monthNames' => false,
                  'empty' => ['' => '--'],
                  'separator' => array('年', '月', '日'),
                  'year' => [ 'class' => "form-control users-birthday__input"],
                  'month' => ['class' => "form-control users-birthday__input"],
                  'day' => ['class' => "form-control users-birthday__input"]
               ]); ?>
               <div class="clearfix"></div>
            </div>
            <div class="form-group">
              <label for="school_id">学校<br><span class="common__input--required">＊在学生のみ</span></label>
              <?=
              $this->Form->control('school_id', [
                  'options' => $schools,
                  'label' => false,
                  'class' => 'form-control users-school__input'
               ]); ?>
               <br><br>
               <span style="color: #ff0000; font-size:0.9em; font-weight:600;">該当する学校が無い場合は「該当無し」を選択してください</span>
               <div class="clearfix"></div>
            </div> 
            <div class="form-group">
              <label for="graduation_year">卒業年度（予定）<br><span class="common__input--required">＊在学生のみ</span></label>
              <?=
              $this->Form->control('graduation', [
                  'type'  => 'year',
                  'label' => false,
                  'maxYear' => date('Y'),
                  'minYear' => date('Y') - 100,
                  'monthNames' => false,
                  'month' => false,
                  'date' => false,
                  'empty' => ['' => '--'],
                  'class' => "form-control users-graduation__input",
                  'value' => h($graduation_year)
               ]); ?>
               <div style="float:left; margin:14px 15px 0px 0px;">年</div>
              <?=
              $this->Form->control('graduation', [
                  'type' => 'month',
                  'label' => false,
                  'monthNames' => false,
                  'year' => false,
                  'date' => false,
                  'empty' => ['' => '--'],
                  'class' => "form-control users-graduation__input",
                  'value' => h($graduation_month)
               ]); ?>
               <div style="float:left; margin:14px 5px 0px 0px;">月</div>
               <div class="clearfix"></div>
            </div>
            <div class="form-group">
              <label for="zip">住所（郵便番号）</label>
              <?= $this->Form->control('zip', [
                  'type' => 'text',
                  'label' => false,
                  'maxlength' => 7,
                  'class' => 'form-control',
                  'placeholder' => 'ハイフンなし数値入力',
                  'onkeyup' => 'AjaxZip3.zip2addr(this,"", "prefecture", "city");'
              ]); ?>
            </div>
            <div class="form-group">
              <label for="prefecture">住所（都道府県）</label>
              <?= $this->Form->control('prefecture', [
                  'type' => 'text',
                  'label' => false,
                  'class' => 'form-control'
              ]); ?>
            </div>
            <div class="form-group">
              <label for="city">住所（市区町村／番地）</label>
              <?= $this->Form->control('city', [
                  'type' => 'text',
                  'label' => false,
                  'class' => 'form-control'
              ]); ?>
            </div>
            <div class="form-group">
              <label for="building">住所（建物名／部屋番号）</label>
              <?= $this->Form->control('building', [
                  'type' => 'text',
                  'label' => false,
                  'class' => 'form-control'
              ]); ?>
            </div> 
            <div class="form-group">
              <label for="is_mailing">メルマガ配信</label>
              <p>
              <?= $this->Form->radio('is_mailing', [
                  ['value' => '0', 'text' => '有', 'class' => 'minimal'],
                  ['value' => '1', 'text' => '無', 'style' => 'margin-left:10px;', 'class' => 'minimal']
               ]); ?>
               </p>
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
              <button type="button" class="linkBtn_s box-color-db" onclick="editAction();">更新する</button>
            </div>
            <input type="hidden" name="id" value="<?= h($user->id) ?>" >
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->