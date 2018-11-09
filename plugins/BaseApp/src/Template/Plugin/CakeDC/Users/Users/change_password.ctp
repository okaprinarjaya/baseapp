<?php
if (!isset($validatePassword)) {
  $this->layout = 'login';
} else {
  $this->layout = 'default';
}
?>

<div class="card-group">

  <div class="card p-4">
    <?= $this->Form->create($user) ?>
    <div class="card-body">
      <?php echo $this->Flash->render('auth'); ?>
      <?php echo $this->Flash->render('error'); ?>
      <?php echo $this->Flash->render('flash'); ?>

      <h1><?= __d('CakeDC/Users', 'Enter your new password') ?></h1>

      <?php if ($validatePassword): ?>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-lock"></i></span>
        </div>
        <?php
        echo $this->Form->password(
          'current_password',
          ['required' => true, 'class' => 'form-control', 'placeholder' => 'Current Password']
        );
        ?>
      </div>
      <?php endif; ?>

      <div class="input-group mb-3">
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

      <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-lock"></i></span>
        </div>
        <?php
        echo $this->Form->password(
          'password_confirm',
          ['required' => true, 'class' => 'form-control', 'placeholder' => 'Confirm password']
        );
        ?>
      </div>

      <div class="row">
        <div class="col-6">
          <?= $this->Form->button(__d('CakeDC/Users', 'Submit'), ['class' => 'btn btn-primary px-4']); ?>
        </div>
      </div>
    </div>
    <?= $this->Form->end() ?>
  </div>

</div>
