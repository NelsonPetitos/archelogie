<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Auteur'), ['action' => 'edit', $auteur->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Auteur'), ['action' => 'delete', $auteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auteur->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Auteurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Auteur'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publications'), ['controller' => 'Publications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publication'), ['controller' => 'Publications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="auteurs view large-9 medium-8 columns content">
    <h3><?= h($auteur->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($auteur->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($auteur->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($auteur->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($auteur->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Publications') ?></h4>
        <?php if (!empty($auteur->publications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Annee') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Reference') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Source Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($auteur->publications as $publications): ?>
            <tr>
                <td><?= h($publications->id) ?></td>
                <td><?= h($publications->annee) ?></td>
                <td><?= h($publications->title) ?></td>
                <td><?= h($publications->reference) ?></td>
                <td><?= h($publications->created) ?></td>
                <td><?= h($publications->modified) ?></td>
                <td><?= h($publications->source_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publications', 'action' => 'view', $publications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publications', 'action' => 'edit', $publications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publications', 'action' => 'delete', $publications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
