<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Notice'), ['action' => 'edit', $notice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notice'), ['action' => 'delete', $notice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="notices view large-10 medium-9 columns">
    <h2><?= h($notice->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $notice->has('user') ? $this->Html->link($notice->user->name, ['controller' => 'Users', 'action' => 'view', $notice->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($notice->title) ?></p>
            <h6 class="subheader"><?= __('Region') ?></h6>
            <p><?= h($notice->region) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($notice->city) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($notice->id) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= $this->Number->format($notice->phone) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($notice->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($notice->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($notice->description)) ?>
        </div>
    </div>
</div>
