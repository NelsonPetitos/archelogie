<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Laboratoire'), ['action' => 'edit', $laboratoire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Laboratoire'), ['action' => 'delete', $laboratoire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laboratoire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Laboratoires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laboratoire'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Datations'), ['controller' => 'Datations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Datation'), ['controller' => 'Datations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="laboratoires view large-9 medium-8 columns content">
    <h3><?= h($laboratoire->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Code Laboratoire') ?></th>
            <td><?= h($laboratoire->code_laboratoire) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($laboratoire->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Datation Count') ?></th>
            <td><?= $this->Number->format($laboratoire->datation_count) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($laboratoire->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($laboratoire->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($laboratoire->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Datations') ?></h4>
        <?php if (!empty($laboratoire->datations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Type Datation') ?></th>
                <th><?= __('Code Reference') ?></th>
                <th><?= __('Date Bp') ?></th>
                <th><?= __('Annee Prise Echantillon') ?></th>
                <th><?= __('Discipline') ?></th>
                <th><?= __('Laboratoire Id') ?></th>
                <th><?= __('Site Id') ?></th>
                <th><?= __('Detail Site Recolte') ?></th>
                <th><?= __('Erreur Standard') ?></th>
                <th><?= __('Culture Associee') ?></th>
                <th><?= __('Horizon Culturel') ?></th>
                <th><?= __('Numero Structure') ?></th>
                <th><?= __('Date Calibree') ?></th>
                <th><?= __('Commentaire') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Source Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($laboratoire->datations as $datations): ?>
            <tr>
                <td><?= h($datations->id) ?></td>
                <td><?= h($datations->type_datation) ?></td>
                <td><?= h($datations->code_reference) ?></td>
                <td><?= h($datations->date_bp) ?></td>
                <td><?= h($datations->annee_prise_echantillon) ?></td>
                <td><?= h($datations->discipline) ?></td>
                <td><?= h($datations->laboratoire_id) ?></td>
                <td><?= h($datations->site_id) ?></td>
                <td><?= h($datations->detail_site_recolte) ?></td>
                <td><?= h($datations->erreur_standard) ?></td>
                <td><?= h($datations->culture_associee) ?></td>
                <td><?= h($datations->horizon_culturel) ?></td>
                <td><?= h($datations->numero_structure) ?></td>
                <td><?= h($datations->date_calibree) ?></td>
                <td><?= h($datations->commentaire) ?></td>
                <td><?= h($datations->created) ?></td>
                <td><?= h($datations->modified) ?></td>
                <td><?= h($datations->source_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Datations', 'action' => 'view', $datations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Datations', 'action' => 'edit', $datations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Datations', 'action' => 'delete', $datations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
