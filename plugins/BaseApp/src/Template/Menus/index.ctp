<div class="card">
  <div class="card-header">
    <strong><i class="icon-menu icons"></i>&nbsp;&nbsp;List of menus</strong>
  </div>

  <div class="card-body">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <div class="row card-actions">
      <?= $this->Html->link('<i class="fa fa-plus"></i> ' . __d('CakeDC/Users', 'Add menu'), ['action' => 'add'], ['class' => 'btn btn-block btn-ghost-primary', 'escape' => false]) ?>
    </div>

    <ul class="list-group">
      <?php
      foreach($menus as $menu):
        $children = count($menu->children);
        if ($children > 0):
          echo '<li class="list-group-item active"><i class="icon-folder icons"></i> ' . $menu->title . '</li>';
          foreach ($menu->children as $submenu):
            echo '<li class="list-group-item children-menu"><i class="icon-doc icons"></i> ' . $submenu->title . '</li>';
          endforeach;
        else:
          echo '<li class="list-group-item active"><i class="icon-folder icons"></i> ' . $menu->title . '</li>';
        endif;
      endforeach;
      ?>
    </ul>

  </div>
</div>
