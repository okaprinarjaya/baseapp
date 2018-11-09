<?php
use Cake\Core\Configure;
$this->layout = 'login';
?>

<div class="card-group">

  <div class="card p-4">
    <?= $this->Form->create() ?>
    <div class="card-body">
      <?php echo $this->Flash->render('auth'); ?>
      <?php echo $this->Flash->render('error'); ?>
      <?php echo $this->Flash->render('flash'); ?>
      <h1>Login</h1>
      <p class="text-muted">Sign In to your account</p>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-user"></i></span>
        </div>
        <?php
        echo $this->Form->text(
          'username',
          ['required' => true, 'class' => 'form-control', 'placeholder' => 'Username', 'autocomplete' => 'off']
        );
        ?>
      </div>

      <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-lock"></i></span>
        </div>
        <?php
        echo $this->Form->password(
          'password',
          ['required' => true, 'class' => 'form-control', 'placeholder' => 'Password']
        );
        ?>
      </div>

      <?php
      if (Configure::read('Users.RememberMe.active')):
      ?>
      <div class="row">
        <div class="col-6">
        <?php
        echo $this->Form->control(Configure::read('Users.Key.Data.rememberMe'), [
          'type' => 'checkbox',
          'label' => __d('CakeDC/Users', 'Remember me'),
          'checked' => Configure::read('Users.RememberMe.checked'),
          'style' => 'margin-right: 5px;'
        ]);
        ?>
        </div>
      </div>
      <?php
      endif;
      ?>

      <div class="row">
        <div class="col-6">
          <?= $this->Form->button(__d('CakeDC/Users', 'Login'), ['class' => 'btn btn-primary px-4']); ?>
        </div>

        <div class="col-6 text-right">
          <?= $this->Html->link(__d('CakeDC/Users', 'Reset Password'), ['action' => 'requestResetPassword'], ['class' => 'btn btn-link px-0']) ?>
        </div>
      </div>
    </div>
    <?= $this->Form->end() ?>
  </div>

</div>
