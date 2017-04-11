<?= $this->Search->setSearchUrl($searchUrl); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer un objet'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="archeologie_table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('name', 'Libellé de l\'objet') ?></th>
                            <th><?= $this->Paginator->sort('categorie', 'Catégorie') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('name', 'string'); ?></th>
                            <th><?= $this->Search->displayField('categorie', 'string'); ?></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                        <?php foreach ($objets as $objet): ?>
                        <tr>
                            <td><?= h($objet->name) ?></td>
                            <td><?= h($objet->categorie) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $objet->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span> ', ['action' => 'delete', $objet->id], ['confirm' => __('Voulez vous supprimer {0}?', $objet->name), 'escape' => false]) ?>
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
        <div class="col-sm-12" id="pagination_box">
            <?= $this->element('pagination'); ?>
        </div>
    </div>
<!-- /.row -->
</section>