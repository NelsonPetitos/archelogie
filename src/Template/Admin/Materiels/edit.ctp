<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materiel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materiel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materiels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Datations'), ['controller' => 'Datations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Datation'), ['controller' => 'Datations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materiels form large-9 medium-8 columns content">
    <?= $this->Form->create($materiel) ?>
    <fieldset>
        <legend><?= __('Edit Materiel') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('categorie');
            echo $this->Form->input('datations._ids', ['options' => $datations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
