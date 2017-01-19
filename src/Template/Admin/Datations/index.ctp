<?= $this->Search->setSearchUrl($searchUrl); ?>

<section class="content">
    <div class="row">
        <div class="col-sm-5">
            <div class="btn-group" style="position: relative; float: left; ">
                <button type="button" class="btn btn-primary btn-sm">Actions supplémentaires</button>
                <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><?= $this->Html->link(__('Créer datation'), ['action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste laboratoires'), ['controller' => 'Laboratoires', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer laboratoire'), ['controller' => 'Laboratoires', 'action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste sites'), ['controller' => 'Sites', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer site'), ['controller' => 'Sites', 'action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste materiels'), ['controller' => 'Materiels', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer materiel'), ['controller' => 'Materiels', 'action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste objets'), ['controller' => 'Objets', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer objet'), ['controller' => 'Objets', 'action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste publications'), ['controller' => 'Publications', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer publication'), ['controller' => 'Publications', 'action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer auteur'), ['action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers">
                <ul class="pagination">
                    <?= $this->Paginator->first('Début'); ?>
                    <?= $this->Paginator->prev('Précédent') ?>
                    <?= $this->Paginator->numbers(['modulus' => 5]) ?>
                    <?= $this->Paginator->next('Suivant') ?>
                    <?= $this->Paginator->last('Fin'); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Auteurs</h3>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="archeologie_table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('date_bp', 'Date Before Present') ?></th>
                            <th><?= $this->Paginator->sort('erreur_standard', 'Erreur standard') ?></th>
                            <th><?= $this->Paginator->sort('date_calibree', 'Date calibrée') ?></th>
                            <th><?= $this->Paginator->sort('site_id', 'Nom du site') ?></th>
                            <th><?= $this->Paginator->sort('laboratoire_id', 'Laboratoire') ?></th>
                            <th><?= $this->Paginator->sort('code_reference', 'Code de l\'échantillon') ?></th>
                            <th><?= __('Date BP préfixée > ou <') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('date_bp', 'number'); ?></th>
                            <th><?= $this->Search->displayField('erreur_standard', 'number'); ?></th>
                            <th><?= $this->Search->displayField('date_calibree', 'string'); ?></th>
                            <th><?= $this->Search->displayField('site_id', 'string', true); ?></th>
                            <th><?= $this->Search->displayField('laboratoire_id', 'string', true); ?></th>
                            <th><?= $this->Search->displayField('code_reference', 'string'); ?></th>
                            <th><?= $this->Search->displayField('commentaire', 'string'); ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                        <?php foreach ($datations as $datation): ?>
                        <tr>
                            <td><?= __($datation->date_bp) ?></td>
                            <td><?= __($datation->erreur_standard) ?></td>
                            <td><?= h($datation->date_calibree) ?></td>
                            <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
                            <td><?= $datation->has('laboratoire') ? $this->Html->link($datation->laboratoire->code_laboratoire, ['controller' => 'Laboratoires', 'action' => 'view', $datation->laboratoire->id]) : '' ?></td>
                            <td><?= h($datation->code_reference) ?></td>
                            <td><?= h($datation->commentaire) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $datation->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $datation->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $datation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datation->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="row">
        <div class="col-sm-5">
            <div class="dataTables_info"  role="status" aria-live="polite">
                <?= $this->Paginator->counter('Page {{page}} sur {{pages}}, de l\'enregistrement {{start}} à {{end}} pour un total de {{count}}') ?>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers">
                <ul class="pagination">
                    <?= $this->Paginator->first('Début'); ?>
                    <?= $this->Paginator->prev('Précédent') ?>
                    <?= $this->Paginator->numbers(['modulus' => 5]) ?>
                    <?= $this->Paginator->next('Suivant') ?>
                    <?= $this->Paginator->last('Fin'); ?>
                </ul>
            </div>
        </div>
    </div>
<!-- /.row -->
</section>
