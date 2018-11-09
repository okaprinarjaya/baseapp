<?php echo $this->Html->docType(); ?>

<html>
  <head>
    <?php
    echo $this->Html->charset();
    echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0, shrink-to-fit=no');
    ?>
    <title>Base Admin App</title>

    <?php
    echo $this->Html->css([
      '/base_app/assets/coreui/icons/css/coreui-icons.min.css',
      '/base_app/assets/font-awesome/css/font-awesome.min.css',
      '/base_app/assets/simple-line-icons/css/simple-line-icons.css',
      '/base_app/assets/style.min.css',
      '/base_app/assets/pace-progress/css/pace.min.css'
    ]);
    ?>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <?php echo $this->fetch('content'); ?>
        </div>
      </div>
    </div>

    <?php
    echo $this->Html->script([
      '/base_app/assets/jquery/js/jquery.min.js',
      '/base_app/assets/popper.js/js/popper.min.js',
      '/base_app/assets/bootstrap/js/bootstrap.min.js',
      '/base_app/assets/pace-progress/js/pace.min.js',
      '/base_app/assets/perfect-scrollbar/js/perfect-scrollbar.min.js',
      '/base_app/assets/coreui/coreui/js/coreui.min.js'
    ]);
    ?>
  </body>
</html>
