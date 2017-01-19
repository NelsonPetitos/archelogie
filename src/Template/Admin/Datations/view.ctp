<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Datation'), ['action' => 'edit', $datation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Datation'), ['action' => 'delete', $datation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Datations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Datation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Laboratoires'), ['controller' => 'Laboratoires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laboratoire'), ['controller' => 'Laboratoires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sites'), ['controller' => 'Sites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Site'), ['controller' => 'Sites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiels'), ['controller' => 'Materiels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiel'), ['controller' => 'Materiels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objets'), ['controller' => 'Objets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objet'), ['controller' => 'Objets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publications'), ['controller' => 'Publications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publication'), ['controller' => 'Publications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="datations view large-9 medium-8 columns content">
    <h3><?= h($datation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type Datation') ?></th>
            <td><?= h($datation->type_datation) ?></td>
        </tr>
        <tr>
            <th><?= __('Code Reference') ?></th>
            <td><?= h($datation->code_reference) ?></td>
        </tr>
        <tr>
            <th><?= __('Discipline') ?></th>
            <td><?= h($datation->discipline) ?></td>
        </tr>
        <tr>
            <th><?= __('Laboratoire') ?></th>
            <td><?= $datation->has('laboratoire') ? $this->Html->link($datation->laboratoire->id, ['controller' => 'Laboratoires', 'action' => 'view', $datation->laboratoire->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Site') ?></th>
            <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Detail Site Recolte') ?></th>
            <td><?= h($datation->detail_site_recolte) ?></td>
        </tr>
        <tr>
            <th><?= __('Culture Associee') ?></th>
            <td><?= h($datation->culture_associee) ?></td>
        </tr>
        <tr>
            <th><?= __('Horizon Culturel') ?></th>
            <td><?= h($datation->horizon_culturel) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Structure') ?></th>
            <td><?= h($datation->numero_structure) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Calibree') ?></th>
            <td><?= h($datation->date_calibree) ?></td>
        </tr>
        <tr>
            <th><?= __('Commentaire') ?></th>
            <td><?= h($datation->commentaire) ?></td>
        </tr>
        <tr>
            <th><?= __('Source') ?></th>
            <td><?= $datation->has('source') ? $this->Html->link($datation->source->id, ['controller' => 'Sources', 'action' => 'view', $datation->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($datation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Bp') ?></th>
            <td><?= $this->Number->format($datation->date_bp) ?></td>
        </tr>
        <tr>
            <th><?= __('Annee Prise Echantillon') ?></th>
            <td><?= $this->Number->format($datation->annee_prise_echantillon) ?></td>
        </tr>
        <tr>
            <th><?= __('Erreur Standard') ?></th>
            <td><?= $this->Number->format($datation->erreur_standard) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($datation->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($datation->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiels') ?></h4>
        <?php if (!empty($datation->materiels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Categorie') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($datation->materiels as $materiels): ?>
            <tr>
                <td><?= h($materiels->id) ?></td>
                <td><?= h($materiels->name) ?></td>
                <td><?= h($materiels->categorie) ?></td>
                <td><?= h($materiels->created) ?></td>
                <td><?= h($materiels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materiels', 'action' => 'view', $materiels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materiels', 'action' => 'edit', $materiels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materiels', 'action' => 'delete', $materiels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Objets') ?></h4>
        <?php if (!empty($datation->objets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Categorie') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($datation->objets as $objets): ?>
            <tr>
                <td><?= h($objets->id) ?></td>
                <td><?= h($objets->name) ?></td>
                <td><?= h($objets->categorie) ?></td>
                <td><?= h($objets->created) ?></td>
                <td><?= h($objets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Objets', 'action' => 'view', $objets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Objets', 'action' => 'edit', $objets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objets', 'action' => 'delete', $objets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Publications') ?></h4>
        <?php if (!empty($datation->publications)): ?>
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
            <?php foreach ($datation->publications as $publications): ?>
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
