<?php
use Cake\Core\Configure;
$this->layout = 'login';
?>

<div class="card">
  <div class="card-body">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <h1><?= __d('CakeDC/Users', 'Sign up') ?></h1>

    <?= $this->Form->create($user); ?>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">Username</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->text(
            'username',
            ['required' => true, 'class' => 'form-control', 'autocomplete' => 'off']
          );
          ?>
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
        <label class="col-md-3 col-form-label" for="password-input">Password</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->password(
            'password',
            ['required' => true, 'class' => 'form-control', 'autocomplete' => 'off']
          );
          ?>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="password-input">Confirm your password</label>
        <div class="col-md-9">
          <?php
          echo $this->Form->password(
            'password_confirm',
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

      <?php if (Configure::read('Users.Tos.required')): ?>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">
          <?php echo __d('CakeDC/Users', 'Accept TOS conditions?'); ?>
        </label>

        <div class="col-md-9">
        <?php
        echo $this->Form->control('tos', ['type' => 'checkbox','label' => false]);
        ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if (Configure::read('Users.reCaptcha.registration')): ?>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="text-input">&nbsp;</label>
        <div class="col-md-9">
        <?php
        echo $this->User->addReCaptcha();
        ?>
        </div>
      </div>
      <?php endif; ?>

      <div class="form-actions">
        <?= $this->Form->button('<i class="fa fa-save"></i> ' . __d('CakeDC/Users', 'Submit'), ['class' => 'btn btn-primary', 'escape' => false]) ?>
      </div>
    <?= $this->Form->end() ?>
  </div>
</div>
