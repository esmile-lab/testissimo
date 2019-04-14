  <?= $this->Html->script('/plugins/jquery/jquery-3.2.1.min') ?>
  <?= $this->Html->script('/plugins/AdminLTE/adminlte.min') ?>
  <?= $this->Html->script('/plugins/bootstrap/bootstrap.min') ?>
  <?= $this->Html->script('/plugins/fastclick/fastclick') ?>
  <?= $this->Html->script('/plugins/jquery-sparkline/jquery.sparkline.min') ?>
  <?= $this->Html->script('/plugins/jvectormap/jquery-jvectormap-1.2.2.min') ?>
  <?= $this->Html->script('/plugins/jvectormap/jquery-jvectormap-world-mill-en') ?>
  <?= $this->Html->script('/plugins/jquery-slimscroll/jquery.slimscroll.min') ?>
  <?= $this->Html->script('/plugins/chartJs/Chart') ?>
  <?= $this->Html->script('/plugins/izimodal/iziModal.min') ?>

  <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert"></script>

  <?= $this->Html->script("Config/define") ?>
  <?= $this->Html->script("Component/Sessions/SessionComponent") ?>
  <?= $this->Html->script("Component/Dialogs/DialogComponent") ?>
  <?= $this->Html->script("Component/Dialogs/LoadingComponent") ?>
  <?= $this->Html->script("Component/Validations/FormComponent") ?>
  <?= $this->Html->script("Component/".$this->request->params['controller']."/".ucfirst($this->request->params['action'])."Component") ?>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72334594-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-72334594-2');
  </script>
  