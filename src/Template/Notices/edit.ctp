<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notice->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Notices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="notices form large-10 medium-9 columns">
    <?= $this->Form->create($notice) ?>
    <fieldset>
        <legend><?= __('Edit Notice') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('phone');
            echo $this->Form->input('region');
            echo $this->Form->input('city');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
