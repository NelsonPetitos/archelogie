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
                    <li><?= $this->Html->link(__('Créer role'), ['action' => 'add']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Liste users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('Créer user'), ['controller' => 'Users', 'action' => 'add']) ?></li>
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
                    <h3 class="box-title">Rôles</h3>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($roles as $role): ?>
                        <tr>
                            <td><?= h($role->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $role->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
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