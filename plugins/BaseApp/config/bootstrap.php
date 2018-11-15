<?php
use Cake\Event\EventManager;
use \CakeDC\Users\Controller\Component\UsersAuthComponent;
use Cake\Cache\Cache;

EventManager::instance()->on(
  UsersAuthComponent::EVENT_AFTER_LOGIN,
  [new BaseApp\Model\Table\RoleMenusTable(), 'fetchMenus']
);

EventManager::instance()->on(UsersAuthComponent::EVENT_AFTER_LOGOUT, function () {
  Cache::delete('__MENUS__', '_myappcache_');
});

function createCheckboxOption($form_helper_obj, $id, $title, $li_class, $opt_icon)
{
  $opt = '<li class="' . $li_class . '">';
  $opt .= '<div class="form-check checkbox">';
  $opt .= $form_helper_obj->checkbox(
    'menu_id[]',
    ['value' => $id, 'hiddenField' => false, 'class' => 'form-check-input']
  );
  $opt .= '<label class="form-check-label"><i class="' . $opt_icon . '"></i> ' . $title . '</label>';
  $opt .= '</div>';
  $opt .= '</li>';

  return $opt;
}

function createMenus($menus, $level = 0)
{
  $str = $level == 0 ? '<ul class="nav">' : '<ul class="nav-dropdown-items">';
  foreach ($menus as $menu) {
    $menuHasChild = count($menu['children']);
    if ($menuHasChild > 0) {
      $str .= '<li class="nav-item nav-dropdown">';
      $str .= '<a class="nav-link nav-dropdown-toggle" href="#">';
      $str .= '<i class="nav-icon fa fa-th-list"></i> ' . $menu['title'];
      $str .= '</a>';

      $str .= createMenus($menu['children'], $level + 1);
      $str .= '</li>';
    } else {
      $str .= '<li class="nav-item">';
      $str .= '<a class="nav-link" href="/">';
      $str .= '<i class="nav-icon icon-drop"></i> ' . $menu['title'];
      $str .= '</a>';
      $str .= '</li>';
    }
  }

  $str .= '</ul>';

  return $str;
}
