<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Source'), ['action' => 'edit', $source->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Source'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Datations'), ['controller' => 'Datations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Datation'), ['controller' => 'Datations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publications'), ['controller' => 'Publications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publication'), ['controller' => 'Publications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sources view large-9 medium-8 columns content">
    <h3><?= h($source->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($source->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($source->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Datations') ?></h4>
        <?php if (!empty($source->datations)): ?>
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
            <?php foreach ($source->datations as $datations): ?>
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
    <div class="related">
        <h4><?= __('Related Publications') ?></h4>
        <?php if (!empty($source->publications)): ?>
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
            <?php foreach ($source->publications as $publications): ?>
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
    <div class="related">
        <h4><?= __('Related Sites') ?></h4>
        <?php if (!empty($source->sites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Latitude') ?></th>
                <th><?= __('Longitude') ?></th>
                <th><?= __('Contry') ?></th>
                <th><?= __('Province') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Datation Count') ?></th>
                <th><?= __('Source Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($source->sites as $sites): ?>
            <tr>
                <td><?= h($sites->id) ?></td>
                <td><?= h($sites->name) ?></td>
                <td><?= h($sites->type) ?></td>
                <td><?= h($sites->latitude) ?></td>
                <td><?= h($sites->longitude) ?></td>
                <td><?= h($sites->contry) ?></td>
                <td><?= h($sites->province) ?></td>
                <td><?= h($sites->created) ?></td>
                <td><?= h($sites->modified) ?></td>
                <td><?= h($sites->datation_count) ?></td>
                <td><?= h($sites->source_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sites', 'action' => 'view', $sites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sites', 'action' => 'edit', $sites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sites', 'action' => 'delete', $sites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
