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
                    <li><?= $this->Html->link(__('Créer objet'), ['action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste datations'), ['controller' => 'Datations', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer datation'), ['controller' => 'Datations', 'action' => 'add']) ?></li>
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
                    <h3 class="box-title">Objets</h3>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="archeologie_table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('categorie') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('name', 'string'); ?></th>
                            <th><?= $this->Search->displayField('categorie', 'string'); ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                        <?php foreach ($objets as $objet): ?>
                        <tr>
                            <td><?= h($objet->name) ?></td>
                            <td><?= h($objet->categorie) ?></td>
                            <td><?= h($objet->created) ?></td>
                            <td><?= h($objet->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $objet->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $objet->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $objet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objet->id)]) ?>
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