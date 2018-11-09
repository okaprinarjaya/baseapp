<div class="box box-primary">
  <div class="box-body box-profile">

    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <img class="profile-user-img img-responsive img-circle" src="/cake_d_c/users/img/avatar_placeholder.png" alt="User profile picture" />

    <h3 class="profile-username text-center">
      <?= h($user->first_name) . ' ' . h($user->last_name) ?>
      <?= ' (' . h($user->username) . ')' ?>
    </h3>

    <p class="text-muted text-center">
      <?= ucfirst(h($user->role)) ?>
    </p>

    <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Id') ?></b>
        <a class="pull-right"><?= h($user->id) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Email') ?></b>
        <a class="pull-right"><?= h($user->email) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Token') ?></b>
        <a class="pull-right"><?= h($user->token ?? '-') ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Api Token') ?></b>
        <a class="pull-right"><?= h($user->api_token ?? '-') ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Active') ?></b>
        <a class="pull-right"><?= $this->Number->format($user->active) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Token Expires') ?></b>
        <a class="pull-right"><?= h($user->token_expires) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Activation Date') ?></b>
        <a class="pull-right"><?= h($user->activation_date) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Tos Date') ?></b>
        <a class="pull-right"><?= h($user->tos_date) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Created') ?></b>
        <a class="pull-right"><?= h($user->created) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Modified') ?></b>
        <a class="pull-right"><?= h($user->modified) ?></a>
      </li>
    </ul>

  </div>
</div>
