<?php
$this->layout = 'login';
?>

<div class="card-group">

  <div class="card p-4">
    <?= $this->Form->create() ?>
    <div class="card-body">
      <?php echo $this->Flash->render('auth'); ?>
      <?php echo $this->Flash->render('error'); ?>
      <?php echo $this->Flash->render('flash'); ?>

      <h1><?= __d('CakeDC/Users', 'Verify') ?></h1>

      <?php if (!empty($secretDataUri)): ?>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-lock"></i></span>
        </div>
        <img src="<?php echo $secretDataUri; ?>"/>
      </div>
      <?php endif; ?>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-lock"></i></span>
        </div>
        <?php
        echo $this->Form->password(
          'code',
          ['required' => true, 'class' => 'form-control', 'placeholder' => 'Verification Code']
        );
        ?>
      </div>

      <div class="row">
        <div class="col-6">
          <?= $this->Form->button(__d('CakeDC/Users', 'Verify'), ['class' => 'btn btn-primary px-4']); ?>
        </div>
      </div>
    </div>
    <?= $this->Form->end() ?>
  </div>

</div>
