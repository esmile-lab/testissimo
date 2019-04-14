<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->element('include_head'); ?>
</head>
<body onload="<?= ucfirst($this->request->params['controller']) ?><?= ucfirst($this->request->params['action']) ?>Component()" class="sidebar-mini" style="height: auto; min-height: 100%;">
  <div class="wrapper" style="height: auto; min-height: 100%;">
    <?= $this->element('header'); ?>
    <?= $this->element('leftmenu'); ?>
  
    <div class="content-wrapper">
        <?= $this->fetch('content') ?>
    </div>
    <div id="izi_modal" data-izimodal-title=""></div>
    
    <?= $this->element('footer'); ?>
  </div>
  <?= $this->element('include_js'); ?>
</body>
</html>
