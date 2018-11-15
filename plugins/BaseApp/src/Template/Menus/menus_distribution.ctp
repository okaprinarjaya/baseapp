<div class="card">
  <div class="card-header">
    <strong><i class="icon-menu icons"></i>&nbsp;&nbsp;Menus distribution to a user's role</strong>
  </div>

  <div class="card-body">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <?= $this->Form->create() ?>
    <div class="form-group row">
      <label class="col-md-3 col-form-label" for="text-input">Role</label>
      <div class="col-md-9">
        <?php
        $this->Form->setTemplates(['inputContainer' => '{{content}}']);
        echo $this->Form->control(
          'role',
          ['options' => ['user' => 'User', 'keeper' => 'Keeper'], 'label' => false, 'empty' => '-- Choose a role --'],
          [
            'required' => true,
            'class' => 'form-control',
            'autocomplete' => 'off'
          ]
        );
        ?>
      </div>
    </div>

    <ul class="list-group menus-distribution">
      <?php
      $elements = '';
      foreach($menus as $menu):
        $children = count($menu->children);
        if ($children > 0):
          $elements .= createCheckboxOption($this->Form, $menu->id, $menu->title, 'list-group-item active', 'icon-folder icons');
          foreach ($menu->children as $submenu):
            $elements .= createCheckboxOption($this->Form, $submenu->id, $submenu->title, 'list-group-item children-menu', 'icon-doc icons');
          endforeach;
        else:
          $elements .= createCheckboxOption($this->Form, $menu->id, $menu->title, 'list-group-item active', 'icon-folder icons');
        endif;
      endforeach;

      echo $elements;
      ?>
    </ul>

    <div class="form-actions" style="margin-top: 25px;">
      <?= $this->Form->button('<i class="fa fa-save"></i> ' . __d('CakeDC/Users', 'Save'), ['class' => 'btn btn-primary', 'escape' => false]) ?>
    </div>

    <?= $this->Form->end() ?>

  </div>
</div>
