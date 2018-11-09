<?php
use Cake\Core\Configure;
?>

<div class="card">
  <div class="card-header">
    <strong><i class="icon-note icons"></i>&nbsp;&nbsp;Edit user</strong>
  </div>

  <div class="card-body">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <?= $this->Form->create($Users); ?>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Username</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'username',
            ['required' => true, 'class' => 'form-control is-invalid', 'autocomplete' => 'off']
          );
          ?>
          <div class="invalid-feedback">Please provide a valid informations.</div>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="email-input">Email</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->email(
            'email',
            ['required' => true, 'class' => 'form-control', 'autocomplete' => 'off']
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">First name</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'first_name',
            ['required' => true, 'class' => 'form-control', 'autocomplete' => 'off']
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Last name</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'last_name',
            ['required' => true, 'class' => 'form-control', 'autocomplete' => 'off']
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Active</label>
        <div class="col-md-9">
        <?php
        echo $this->Form->control('active', ['type' => 'checkbox','label' => false]);
        ?>
        </div>
      </div>

      <div class="form-actions">
        <?= $this->Form->button('<i class="fa fa-save"></i> ' . __d('CakeDC/Users', 'Update'), ['class' => 'btn btn-primary', 'escape' => false]) ?>
      </div>
    <?= $this->Form->end() ?>
  </div>
</div>
