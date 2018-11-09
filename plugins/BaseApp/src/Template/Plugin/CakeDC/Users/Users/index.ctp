<div class="card">
  <div class="card-header">
    <strong><i class="icon-people"></i>&nbsp;&nbsp;List of users</strong>
  </div>

  <div class="card-body">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Flash->render('error'); ?>
    <?php echo $this->Flash->render('flash'); ?>

    <div class="row card-actions">
      <?= $this->Html->link('<i class="icon-user-follow"></i> ' . __d('CakeDC/Users', 'Add new user'), ['action' => 'add'], ['class' => 'btn btn-block btn-ghost-primary', 'escape' => false]) ?>
    </div>

    <table class="table table-responsive-sm table-striped">
      <thead>
        <tr>
          <th><?= $this->Paginator->sort('username', __d('CakeDC/Users', 'Username')) ?></th>
          <th><?= $this->Paginator->sort('email', __d('CakeDC/Users', 'Email')) ?></th>
          <th><?= $this->Paginator->sort('first_name', __d('CakeDC/Users', 'First name')) ?></th>
          <th><?= $this->Paginator->sort('last_name', __d('CakeDC/Users', 'Last name')) ?></th>
          <th class="actions">&nbsp;</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($Users as $user): ?>
        <tr>
          <td><?= h($user->username) ?></td>
          <td><?= h($user->email) ?></td>
          <td><?= h($user->first_name) ?></td>
          <td><?= h($user->last_name) ?></td>
          <td class="actions">
            <div class="btn-group">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icons cui-cog"></i> Actions</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                  <?= $this->Html->link(__d('CakeDC/Users', 'View'), ['action' => 'view', $user->id], ['class' => 'dropdown-item']) ?>
                  <?= $this->Html->link(__d('CakeDC/Users', 'Change password'), ['action' => 'changePassword', $user->id], ['class' => 'dropdown-item']) ?>
                  <?= $this->Html->link(__d('CakeDC/Users', 'Edit'), ['action' => 'edit', $user->id], ['class' => 'dropdown-item']) ?>
                  <?= $this->Form->postLink(__d('CakeDC/Users', 'Delete'), ['action' => 'delete', $user->id], ['confirm' => __d('CakeDC/Users', 'Are you sure you want to delete # {0}?', $user->id), 'class' => 'dropdown-item']) ?>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <ul class="pagination">
      <?php
      $this->Paginator->setTemplates([
        'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
      ]);
      ?>
      <?= $this->Paginator->prev('< ' . __d('CakeDC/Users', 'previous')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__d('CakeDC/Users', 'next') . ' >') ?>
    </ul>

  </div>
</div>
