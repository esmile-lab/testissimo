<?php
$Tops                               = '';
$Tops_view                          = '';

$GameStudyCategories                = '';
$GameStudyContents                  = '';
$BusinessStudyCategories            = '';
$BusinessStudyContents              = '';

$Users                              = '';
$Users_edit                         = '';
$Users_delete                       = '';

${$this->request->params['controller']} = 'active';
${$this->request->params['controller']."_".$this->request->params['action']} = 'active';

/*
if ($this->request->params['controller'] == 'SystemCategories' || $this->request->params['controller'] == 'SystemContents') {
    ${$this->request->params['controller']."_".$this->request->query['type']} = 'active';
}

if ($this->request->params['controller'] == 'UserUploadContents' && $this->request->query['type'] == 'business') {
    $SystemContents_business = 'active';
} else if ($this->request->params['controller'] == 'UserUploadContents' && $this->request->query['type'] == 'game') {
    $SystemContents_game = 'active';
}
*/

if ($this->request->params['controller'] == 'Users' &&  $this->request->params['action'] == 'contact') {
    $Users = '';
}
?>
  
  <aside class="main-sidebar">
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <div class="sidebar-study__header">
        <div style="margin:8px 5px 5px 8px;">
          <p style="font-size:16px; font-weight:bold;">
            <i class="fa fa-book"></i> 学習コース
          </p>
          <p style="font-size:12px;">職種・学習分野を選択してください
          </p>
        </div>
      </div>

      <ul class="sidebar-menu tree" data-widget="tree">

        <li class="treeview <?= $GameStudyCategories ?> <?= $GameStudyContents ?>">
          <a href="#" class="treeCustom  box-color-o MenuCustom"><i class="fa fa-gamepad"></i> <span>ゲーム系</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <?php if(count($courseCategory[0]) > 0): ?>
              <?php foreach ($courseCategory[0] as $gCategory): ?>

                <li class="course-category__menu">
                  <a class="game-course__link" href="<?= $this->Url->build(['controller'=>'gameStudyCategories', 'action'=>'view', $gCategory['id']]) ?>">
                    <b><i class="fa fa-file"></i> <?= $gCategory['name'] ?></b>
                  </a>
                </li>

              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </li>

        <li class="treeview <?= $BusinessStudyCategories ?> <?= $BusinessStudyContents ?>">
          <a href="#" class="treeCustom box-color-o MenuCustom"><i class="fa fa-briefcase"></i> <span>ビジネス系</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <?php if(count($courseCategory[1]) > 0): ?>
              <?php foreach ($courseCategory[1] as $bCategory): ?>

                <li class="course-category__menu">
                  <a class="business-course__link" href="<?= $this->Url->build(['controller'=>'businessStudyCategories', 'action'=>'view', $bCategory['id']]) ?>">
                    <b><i class="fa fa-file"></i> <?= $bCategory['name'] ?></b>
                  </a>
                </li>

              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </li>

      <div class="sidebar-study__underline"></div>

        <li class="treeview <?= $Users ?>">
          <a href="#"  class="treeCustom box-color-b MenuCustom"><i class="fa fa-user"></i>
            <span>ユーザー情報</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="user-category__menu <?= $Users_edit ?>">
              <a class="user__link" href="<?= $this->Url->build(['controller'=>'users', 'action'=>'edit', $this->request->session()->read('loginUser.id')]) ?>">
                <b><i class="fa fa-address-card"></i> 登録情報</b>
              </a>
            </li>
            <li class="user-category__menu <?= $Users_delete ?>">
              <a class="user__link" href="<?= $this->Url->build(['controller'=>'users', 'action'=>'delete', $this->request->session()->read('loginUser.id')]) ?>">
                <b><i class="fa fa-user-times"></i> 退会処理</b>
              </a>
            </li>
          </ul>
        </li>

        <li class="">
          <a href="<?= $this->Url->build(['controller'=>'users', 'action'=>'contact', $this->request->session()->read('loginUser.id')]) ?>"  class="treeCustom box-color-b MenuCustom"><i class="fa fa-envelope"></i>
            <span>お問い合わせ</span>
          </a>
        </li>

        <li class="">
          <a href="<?= $this->Url->build(['controller'=>'informations', 'action'=>'guide']) ?>"  class="treeCustom box-color-b MenuCustom"><i class="fa fa-exclamation-circle"></i>
            <span>使い方ガイド</span>
          </a>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>