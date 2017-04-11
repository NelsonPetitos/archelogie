<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
    <!--<ul class="side-nav">-->
        <!--<li class="heading"><?= __('Actions') ?></li>-->
        <!--<li><?= $this->Html->link(__('Edit Publication'), ['action' => 'edit', $publication->id]) ?> </li>-->
        <!--<li><?= $this->Form->postLink(__('Delete Publication'), ['action' => 'delete', $publication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publication->id)]) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List Publications'), ['action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New Publication'), ['action' => 'add']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List Auteurs'), ['controller' => 'Auteurs', 'action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New Auteur'), ['controller' => 'Auteurs', 'action' => 'add']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List Datations'), ['controller' => 'Datations', 'action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New Datation'), ['controller' => 'Datations', 'action' => 'add']) ?> </li>-->
    <!--</ul>-->
<!--</nav>-->
<?= $this->start('Breadcrumb'); ?>
    <li>Publication</li>
    <li><?= h($publication->title) ?></li>
<?= $this->end(); ?>

<div class="row">
    <div class="col-md-9">
        <div class="panel panel-info">
            <div class="panel-heading">Publication</div>
            <div class="panel-body">
                <table class="my__table">
                    <tr>
                        <th>Titre de la publication</th>
                        <td><?= $publication->title ?></td>
                    </tr>
                    <tr>
                        <th>Année de publication</th>
                        <td><?= h($publication->annee) ?></td>
                    </tr>
                    <tr>
                        <th>Référence bibliographique</th>
                        <td><?= $publication->reference ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">Auteurs</div>
            <div class="panel-body">
                <ul>
                        <?php foreach ($publication->auteurs as $auteur): ?>
                    <li>
                        <?= h($auteur->name) ?>
                    </li>
                        <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>



<!--<div class="publications view large-9 medium-8 columns content">-->
    <!--<h3><?= h($publication->title) ?></h3>-->
    <!--<table class="vertical-table">-->
        <!--<tr>-->
            <!--<th><?= __('Title') ?></th>-->
            <!--<td><?= h($publication->title) ?></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<th><?= __('Id') ?></th>-->
            <!--<td><?= $this->Number->format($publication->id) ?></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<th><?= __('Annee') ?></th>-->
            <!--<td><?= $this->Number->format($publication->annee) ?></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<th><?= __('Created') ?></th>-->
            <!--<td><?= h($publication->created) ?></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<th><?= __('Modified') ?></th>-->
            <!--<td><?= h($publication->modified) ?></td>-->
        <!--</tr>-->
    <!--</table>-->
    <!--<div class="row">-->
        <!--<h4><?= __('Reference') ?></h4>-->
        <!--<?= $this->Text->autoParagraph(h($publication->reference)); ?>-->
    <!--</div>-->
    <!--<div class="related">-->
        <!--<h4><?= __('Related Auteurs') ?></h4>-->
        <!--<?php if (!empty($publication->auteurs)): ?>-->
        <!--<table cellpadding="0" cellspacing="0">-->
            <!--<tr>-->
                <!--<th><?= __('Id') ?></th>-->
                <!--<th><?= __('Name') ?></th>-->
                <!--<th><?= __('Created') ?></th>-->
                <!--<th><?= __('Modified') ?></th>-->
                <!--<th class="actions"><?= __('Actions') ?></th>-->
            <!--</tr>-->
            <!--<?php foreach ($publication->auteurs as $auteurs): ?>-->
            <!--<tr>-->
                <!--<td><?= h($auteurs->id) ?></td>-->
                <!--<td><?= h($auteurs->name) ?></td>-->
                <!--<td><?= h($auteurs->created) ?></td>-->
                <!--<td><?= h($auteurs->modified) ?></td>-->
                <!--<td class="actions">-->
                    <!--<?= $this->Html->link(__('View'), ['controller' => 'Auteurs', 'action' => 'view', $auteurs->id]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['controller' => 'Auteurs', 'action' => 'edit', $auteurs->id]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Auteurs', 'action' => 'delete', $auteurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auteurs->id)]) ?>-->
                <!--</td>-->
            <!--</tr>-->
            <!--<?php endforeach; ?>-->
        <!--</table>-->
        <!--<?php endif; ?>-->
    <!--</div>-->
    <!--<div class="related">-->
        <!--<h4><?= __('Related Datations') ?></h4>-->
        <!--<?php if (!empty($publication->datations)): ?>-->
        <!--<table cellpadding="0" cellspacing="0">-->
            <!--<tr>-->
                <!--<th><?= __('Id') ?></th>-->
                <!--<th><?= __('Type Datation') ?></th>-->
                <!--<th><?= __('Code Reference') ?></th>-->
                <!--<th><?= __('Date Bp') ?></th>-->
                <!--<th><?= __('Annee Prise Echantillon') ?></th>-->
                <!--<th><?= __('Discipline') ?></th>-->
                <!--<th><?= __('Laboratoire Id') ?></th>-->
                <!--<th><?= __('Site Id') ?></th>-->
                <!--<th><?= __('Detail Site Recolte') ?></th>-->
                <!--<th><?= __('Erreur Standard') ?></th>-->
                <!--<th><?= __('Culture Associee') ?></th>-->
                <!--<th><?= __('Horizon Culturel') ?></th>-->
                <!--<th><?= __('Numero Structure') ?></th>-->
                <!--<th><?= __('Date Calibree') ?></th>-->
                <!--<th><?= __('Commentaire') ?></th>-->
                <!--<th><?= __('Created') ?></th>-->
                <!--<th><?= __('Modified') ?></th>-->
                <!--<th><?= __('Origine') ?></th>-->
                <!--<th class="actions"><?= __('Actions') ?></th>-->
            <!--</tr>-->
            <!--<?php foreach ($publication->datations as $datations): ?>-->
            <!--<tr>-->
                <!--<td><?= h($datations->id) ?></td>-->
                <!--<td><?= h($datations->type_datation) ?></td>-->
                <!--<td><?= h($datations->code_reference) ?></td>-->
                <!--<td><?= h($datations->date_bp) ?></td>-->
                <!--<td><?= h($datations->annee_prise_echantillon) ?></td>-->
                <!--<td><?= h($datations->discipline) ?></td>-->
                <!--<td><?= h($datations->laboratoire_id) ?></td>-->
                <!--<td><?= h($datations->site_id) ?></td>-->
                <!--<td><?= h($datations->detail_site_recolte) ?></td>-->
                <!--<td><?= h($datations->erreur_standard) ?></td>-->
                <!--<td><?= h($datations->culture_associee) ?></td>-->
                <!--<td><?= h($datations->horizon_culturel) ?></td>-->
                <!--<td><?= h($datations->numero_structure) ?></td>-->
                <!--<td><?= h($datations->date_calibree) ?></td>-->
                <!--<td><?= h($datations->commentaire) ?></td>-->
                <!--<td><?= h($datations->created) ?></td>-->
                <!--<td><?= h($datations->modified) ?></td>-->
                <!--<td><?= h($datations->origine) ?></td>-->
                <!--<td class="actions">-->
                    <!--<?= $this->Html->link(__('View'), ['controller' => 'Datations', 'action' => 'view', $datations->id]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['controller' => 'Datations', 'action' => 'edit', $datations->id]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Datations', 'action' => 'delete', $datations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datations->id)]) ?>-->
                <!--</td>-->
            <!--</tr>-->
            <!--<?php endforeach; ?>-->
        <!--</table>-->
        <!--<?php endif; ?>-->
    <!--</div>-->
<!--</div>-->
