<?php
$this->layout = 'login';
?>

<div class="card-group">

  <div class="card p-4">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create('User') ?>
    <div class="card-body">
      <h1>Forgot password</h1>
      <p class="text-muted"><?= __d('CakeDC/Users', 'Please enter your email to reset your password') ?></p>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-envelope"></i></span>
        </div>
        <?php
        echo $this->Form->text(
          'reference',
          ['required' => true, 'class' => 'form-control', 'placeholder' => 'Email', 'autocomplete' => 'off']
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
