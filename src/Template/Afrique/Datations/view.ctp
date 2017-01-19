<?= $this->start('Breadcrumb'); ?>
    <li>Datation</li>
    <li><?= h($datation->code_reference) ?></li>
<?= $this->end(); ?>

<div class="row">
    <div class="col-lg-5">
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">Datations</div>
                <div class="panel-body">
                    <table class="my__table">
                        <tr>
                            <td>Objets datés</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Date "Before Present"</td>
                            <td><?= $datation->date_bp ?></td>
                        </tr>
                        <tr>
                            <td>Date calibrée</td>
                            <td><?= $datation->date_calibree ?></td>
                        </tr>
                        <tr>
                            <td>Erreur standard</td>
                            <td><?= $datation->erreur_standard ?></td>
                        </tr>
                        <tr>
                            <td>Discipline</td>
                            <td><?= $datation->discipline ?></td>
                        </tr>
                        <tr>
                            <td>Attribution chronoculturelle</td>
                            <td><?= $datation->culture_associee ?></td>
                        </tr>
                        <tr>
                            <td>Année de prise de l'échantillon</td>
                            <td><?= $datation->annee_prise_echantillon ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">Publications associés</div>
                <div class="panel-body">
                    <ol>
                        <li>
                            <?php foreach ($datation->publications as $publications): ?>
                            <?= h($publications->annee) ?> -
                            <?= h($publications->title) ?> -
                            <?= h($publications->reference) ?>
                            <?php endforeach; ?>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">objets associés</div>
                <div class="panel-body">
                    <ol>
                        <?php foreach ($datation->materiels as $materiels): ?>
                        <li><?= h($materiels->name) ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="panel panel-info" >
            <div class="panel-heading">Divers</div>
            <div class="panel-body">
                <table class="my__table">
                    <tr>
                        <td>Code du laboratoire d'analyse</td>
                        <td><?= $datation->has('laboratoire') ? h($datation->laboratoire->code_laboratoire) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Intitulé du laboratoire</td>
                        <td><?= $datation->has('laboratoire') ? h($datation->laboratoire->description) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Code de référence de l'échantillon</td>
                        <td><?=  h($datation->code_reference) ?></td>
                    </tr>
                    <tr>
                        <td>Site de récolte</td>
                        <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Type de site</td>
                        <td><?= $datation->has('site') ? h($datation->site->type) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Horizon culturel</td>
                        <td><?= h($datation->horizon_culturel) ?></td>
                    </tr>
                    <tr>
                        <td>Numéro de structure</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Pays</td>
                        <td><?= $datation->has('site') ? h($datation->site->contry) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Province</td>
                        <td><?= $datation->has('site') ? h($datation->site->province) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td><?= $datation->has('site') ? h($datation->site->latitude) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td><?= $datation->has('site') ? h($datation->site->longitude) : '' ?></td>
                    </tr>
                    <tr>
                        <td>Détails du site de récolte</td>
                        <td><?= h($datation->detail_site_recolte) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

        <!--<h4><?= __('Related Materiels') ?></h4>-->
        <!--<?php if (!empty($datation->materiels)): ?>-->
        <!--<table cellpadding="0" cellspacing="0">-->
            <!--<tr>-->
                <!--<th><?= __('Id') ?></th>-->
                <!--<th><?= __('Name') ?></th>-->
                <!--<th><?= __('Categorie') ?></th>-->
                <!--<th><?= __('Created') ?></th>-->
                <!--<th><?= __('Modified') ?></th>-->
                <!--<th class="actions"><?= __('Actions') ?></th>-->
            <!--</tr>-->
            <!--<?php foreach ($datation->materiels as $materiels): ?>-->
            <!--<tr>-->
                <!--<td><?= h($materiels->id) ?></td>-->
                <!--<td><?= h($materiels->name) ?></td>-->
                <!--<td><?= h($materiels->categorie) ?></td>-->
                <!--<td><?= h($materiels->created) ?></td>-->
                <!--<td><?= h($materiels->modified) ?></td>-->
                <!--<td class="actions">-->
                    <!--<?= $this->Html->link(__('View'), ['controller' => 'Materiels', 'action' => 'view', $materiels->id]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['controller' => 'Materiels', 'action' => 'edit', $materiels->id]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Materiels', 'action' => 'delete', $materiels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiels->id)]) ?>-->
                <!--</td>-->
            <!--</tr>-->
            <!--<?php endforeach; ?>-->
        <!--</table>-->
        <!--<?php endif; ?>-->
    <!--</div>-->
    <!--<div class="related">-->
        <!--<h4><?= __('Related Objets') ?></h4>-->
        <!--<?php if (!empty($datation->objets)): ?>-->
        <!--<table cellpadding="0" cellspacing="0">-->
            <!--<tr>-->
                <!--<th><?= __('Id') ?></th>-->
                <!--<th><?= __('Name') ?></th>-->
                <!--<th><?= __('Categorie') ?></th>-->
                <!--<th><?= __('Created') ?></th>-->
                <!--<th><?= __('Modified') ?></th>-->
                <!--<th class="actions"><?= __('Actions') ?></th>-->
            <!--</tr>-->
            <!--<?php foreach ($datation->objets as $objets): ?>-->
            <!--<tr>-->
                <!--<td><?= h($objets->id) ?></td>-->
                <!--<td><?= h($objets->name) ?></td>-->
                <!--<td><?= h($objets->categorie) ?></td>-->
                <!--<td><?= h($objets->created) ?></td>-->
                <!--<td><?= h($objets->modified) ?></td>-->
                <!--<td class="actions">-->
                    <!--<?= $this->Html->link(__('View'), ['controller' => 'Objets', 'action' => 'view', $objets->id]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['controller' => 'Objets', 'action' => 'edit', $objets->id]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Objets', 'action' => 'delete', $objets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objets->id)]) ?>-->
                <!--</td>-->
            <!--</tr>-->
            <!--<?php endforeach; ?>-->
        <!--</table>-->
        <!--<?php endif; ?>-->
    <!--</div>-->
    <!--<div class="related">-->
        <!--<h4><?= __('Related Publications') ?></h4>-->
        <!--<?php if (!empty($datation->publications)): ?>-->
        <!--<table cellpadding="0" cellspacing="0">-->
            <!--<tr>-->
                <!--<th><?= __('Id') ?></th>-->
                <!--<th><?= __('Annee') ?></th>-->
                <!--<th><?= __('Title') ?></th>-->
                <!--<th><?= __('Reference') ?></th>-->
                <!--<th><?= __('Created') ?></th>-->
                <!--<th><?= __('Modified') ?></th>-->
                <!--<th class="actions"><?= __('Actions') ?></th>-->
            <!--</tr>-->
            <!--<?php foreach ($datation->publications as $publications): ?>-->
            <!--<tr>-->
                <!--<td><?= h($publications->id) ?></td>-->
                <!--<td><?= h($publications->annee) ?></td>-->
                <!--<td><?= h($publications->title) ?></td>-->
                <!--<td><?= h($publications->reference) ?></td>-->
                <!--<td><?= h($publications->created) ?></td>-->
                <!--<td><?= h($publications->modified) ?></td>-->
                <!--<td class="actions">-->
                    <!--<?= $this->Html->link(__('View'), ['controller' => 'Publications', 'action' => 'view', $publications->id]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['controller' => 'Publications', 'action' => 'edit', $publications->id]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Publications', 'action' => 'delete', $publications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publications->id)]) ?>-->
                <!--</td>-->
            <!--</tr>-->
            <!--<?php endforeach; ?>-->
        <!--</table>-->
        <?php endif; ?>

