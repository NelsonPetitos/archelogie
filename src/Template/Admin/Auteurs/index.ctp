<div id="wrapper">

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
                        <li><?= $this->Html->link(__('Créer auteur'), ['action' => 'add']) ?></li>
                        <li class="divider"></li>
                        <li><?= $this->Html->link(__('Liste publications'), ['controller' => 'Publications', 'action' => 'index']) ?></li>
                        <li class="divider"></li>
                        <li><?= $this->Html->link(__('Créer publication'), ['controller' => 'Publications', 'action' => 'add']) ?></li>
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
                                    <th><?= $this->Paginator->sort('name') ?></th>
                                    <th><?= $this->Paginator->sort('created') ?></th>
                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                                <tr>
                                    <th><?= $this->Search->displayField('name', 'string'); ?></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="data_table_body">
                                <?php foreach ($auteurs as $auteur): ?>
                                <tr>
                                    <td><?= h($auteur->name) ?></td>
                                    <td><?= h($auteur->created) ?></td>
                                    <td><?= h($auteur->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Détails'), ['action' => 'view', $auteur->id], ['escape' => false]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $auteur->id], ['escape' => false]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $auteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auteur->id), 'escape' => false]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix no-border">

                    </div>
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
</div>
