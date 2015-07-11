
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notices'), ['controller' => 'Notices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notice'), ['controller' => 'Notices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Profession') ?></h6>
            <p><?= h($user->profession) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($user->description) ?></p>
            <h6 class="subheader"><?= __('Region') ?></h6>
            <p><?= h($user->region) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($user->city) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= $this->Number->format($user->phone) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Notices') ?></h4>
    <?php if (!empty($user->notices)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Region') ?></th>
            <th><?= __('City') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->notices as $notices): ?>
        <tr>
            <td><?= h($notices->id) ?></td>
            <td><?= h($notices->user_id) ?></td>
            <td><?= h($notices->title) ?></td>
            <td><?= h($notices->description) ?></td>
            <td><?= h($notices->phone) ?></td>
            <td><?= h($notices->region) ?></td>
            <td><?= h($notices->city) ?></td>
            <td><?= h($notices->created) ?></td>
            <td><?= h($notices->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Notices', 'action' => 'view', $notices->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Notices', 'action' => 'edit', $notices->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notices', 'action' => 'delete', $notices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notices->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
