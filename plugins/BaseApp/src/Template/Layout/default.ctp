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
      '/base_app/assets/pace-progress/css/pace.min.css',
      '/base_app/assets/base-app.css'
    ]);
    ?>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="/base_app/assets/img/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="/base_app/assets/img/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="/base_app/assets/img/avatar.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-key"></i> Change password
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
    </header>

    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
          <li class="nav-title">Application Menus</li>
            <li class="nav-item">
              <a class="nav-link" href="colors.html">
                <i class="nav-icon icon-drop"></i> Colors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Typography</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="nav-icon icon-pie-chart"></i> Charts</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <i class="nav-icon icon-calculator"></i> Widgets
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>

            <li class="nav-title">Base Manage</li>
            <li class="nav-item">
              <a class="nav-link" href="colors.html">
                <i class="nav-icon icon-user"></i> Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Menus</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="nav-icon icon-pie-chart"></i> Charts</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <i class="nav-icon icon-calculator"></i> Widgets
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>

          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>

        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
          <?php echo $this->fetch('content'); ?>
          </div>
        </div>
      </main>
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
