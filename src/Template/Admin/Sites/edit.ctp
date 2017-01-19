<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $site->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $site->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Datations'), ['controller' => 'Datations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Datation'), ['controller' => 'Datations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sites form large-9 medium-8 columns content">
    <?= $this->Form->create($site) ?>
    <fieldset>
        <legend><?= __('Edit Site') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type');
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            echo $this->Form->input('contry');
            echo $this->Form->input('province');
            echo $this->Form->input('datation_count');
            echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
