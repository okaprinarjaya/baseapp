<div class="box box-primary">
  <div class="box-body box-profile">
    <img class="profile-user-img img-responsive img-circle" src="/cake_d_c/users/img/avatar_placeholder.png" alt="User profile picture" />

    <h3 class="profile-username text-center">
      <?= h($Users->first_name) . ' ' . h($Users->last_name) ?>
      <?= ' (' . h($Users->username) . ')' ?>
    </h3>

    <p class="text-muted text-center">
      <?= ucfirst(h($Users->role)) ?>
    </p>

    <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Id') ?></b>
        <a class="pull-right"><?= h($Users->id) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Email') ?></b>
        <a class="pull-right"><?= h($Users->email) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Token') ?></b>
        <a class="pull-right"><?= h($Users->token ?? '-') ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Api Token') ?></b>
        <a class="pull-right"><?= h($Users->api_token ?? '-') ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Active') ?></b>
        <a class="pull-right"><?= $this->Number->format($Users->active) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Token Expires') ?></b>
        <a class="pull-right"><?= h($Users->token_expires) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Activation Date') ?></b>
        <a class="pull-right"><?= h($Users->activation_date) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Tos Date') ?></b>
        <a class="pull-right"><?= h($Users->tos_date) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Created') ?></b>
        <a class="pull-right"><?= h($Users->created) ?></a>
      </li>

      <li class="list-group-item">
        <b><?= __d('CakeDC/Users', 'Modified') ?></b>
        <a class="pull-right"><?= h($Users->modified) ?></a>
      </li>
    </ul>

  </div>
</div>
