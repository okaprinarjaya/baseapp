<?php
use Cake\Cache\Cache;

$menus = Cache::read('__MENUS__', '_myappcache_');
$menus = $menus === false ? [] : json_decode($menus, true);
$menus_html_str = createMenus($this->Html, $this->request->params, $menus);

echo $this->Html->docType();
?>

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

      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="/base_app/assets/img/avatar.jpg" alt="admin@bootstrapmaster.com">
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>

            <a class="dropdown-item" href="/profile">
              <i class="icon-emotsmile icons"></i> About me
            </a>

            <?php
            echo $this->Html->link(
              '<i class="fa fa-key"></i> ' . __d('CakeDC/Users', 'Change password'),
              ['action' => 'changePassword', $this->request->getSession()->read('Auth.User.id')],
              ['class' => 'dropdown-item', 'escape' => false]
            );
            ?>

            <a class="dropdown-item" href="/users/users/logout">
              <i class="fa fa-lock"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </header>

    <div class="app-body">

      <?php echo $this->element('menunav', ['menus_html_str' => $menus_html_str]); ?>

      <main class="main">
        <div class="container-fluid" style="padding-top: 10px;">
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
