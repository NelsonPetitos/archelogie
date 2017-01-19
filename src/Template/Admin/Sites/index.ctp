
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
                    <li><?= $this->Html->link(__('Créer site'), ['action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
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
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sites</h3>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('name', 'Nom du site') ?></th>
                            <th><?= $this->Paginator->sort('type', 'Type de site') ?></th>
                            <th><?= $this->Paginator->sort('contry', 'Pays') ?></th>
                            <th><?= $this->Paginator->sort('province', 'Province') ?></th>
                            <th><?= $this->Paginator->sort('latitude', 'Latitude') ?></th>
                            <th><?= $this->Paginator->sort('longitude', 'Longitude') ?></th>
                            <th class="actions" rowspan="2"><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('name', 'string'); ?></th>
                            <th><?= $this->Search->displayField('type', 'string'); ?></th>
                            <th><?= $this->Search->displayField('contry', 'string'); ?></th>
                            <th><?= $this->Search->displayField('province', 'string'); ?></th>
                            <th><?= $this->Search->displayField('latitude', 'number'); ?></th>
                            <th><?= $this->Search->displayField('longitude', 'number'); ?></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                            <?php foreach ($sites as $site): ?>
                            <tr>
                                <td><?= h($site->name) ?></td>
                                <td><?= h($site->type) ?></td>
                                <td><?= h($site->contry) ?></td>
                                <td><?= h($site->province) ?></td>
                                <td><?= $this->Number->format($site->latitude) ?></td>
                                <td><?= $this->Number->format($site->longitude) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $site->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $site->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $site->id], ['confirm' => __('Are you sure you want to delete # {0}?', $site->id)]) ?>
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