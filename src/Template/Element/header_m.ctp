  <header class="main-header">

    <a href="<?= $this->Url->build(['controller'=>'tops', 'action'=>'view']) ?>" class="logo">
      <img src="<?=$this->Url->image('Component/Commons/logo.png');?>" alt="fortissimoロゴ">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

<?php /*
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">1件の未読メッセージがあります</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <!-- start message -->
                  <li>
                    <a href="#">
                      <h4>
                        イースマイルHD
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>テストメッセージ</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
            </ul>
          </li>
 */ ?>
 
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="header__user--big">
                <?=$this->request->session()->read('loginManager.name') ?> さん
              </span>
              <span class="header__user--small">
                <i class="fa  fa-user"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  <?=$this->request->session()->read('loginManager.name') ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= $this->Url->build(['controller'=>'managers', 'action'=>'edit', $this->request->session()->read('loginManager.id')]) ?>" class="btn btn-default btn-flat">管理者情報</a>
                </div>
                <div class="pull-right">
                  <a href="#" onclick="logoutAction();" class="btn btn-default btn-flat">ログアウト</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>