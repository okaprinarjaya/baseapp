<div class="card">
  <div class="card-header">
    <strong><i class="icon-menu icons"></i>&nbsp;&nbsp;Add new menu</strong>
  </div>

  <div class="card-body">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <?= $this->Form->create($menu) ?>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Parent</label>
        <div class="col-md-9">
          <?php
          $this->Form->setTemplates(['inputContainer' => '{{content}}']);
          echo $this->Form->control(
            'parent_id',
            ['options' => $the_menus, 'label' => false, 'empty' => '-- EMPTY --'],
            [
              'required' => true,
              'class' => 'form-control',
              'autocomplete' => 'off'
            ]
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Title</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'title',
            [
              'required' => true,
              'class' => 'form-control',
              'autocomplete' => 'off'
            ]
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Plugin</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'plugin',
            [
              'required' => false,
              'class' => 'form-control',
              'autocomplete' => 'off'
            ]
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Controller</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'controller',
            [
              'required' => false,
              'class' => 'form-control',
              'autocomplete' => 'off'
            ]
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Action</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'action',
            [
              'required' => false,
              'class' => 'form-control',
              'autocomplete' => 'off'
            ]
          );
          ?>
        </div>
      </div>

      <div class="form-actions">
        <?= $this->Form->button('<i class="fa fa-save"></i> ' . __d('CakeDC/Users', 'Save'), ['class' => 'btn btn-primary', 'escape' => false]) ?>
      </div>
    <?= $this->Form->end() ?>
  </div>
</div>
