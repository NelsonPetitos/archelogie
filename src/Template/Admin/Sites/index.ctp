
<?= $this->Search->setSearchUrl($searchUrl); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer un site'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
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
                            <th class="actions"><?= __('Actions') ?></th>
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
                                    <?= $this->Html->link('<span class="glyphicon glyphicon-search"></span> ', ['action' => 'view', $site->id], ['escape' => false, 'class' => 'space-right']) ?>
                                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> ', ['action' => 'edit', $site->id], ['escape' => false, 'class' => 'space-right']) ?>
                                    <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $site->id], ['confirm' => __('Voulez vous supprimer {0}?', $site->name), 'escape' => false]) ?>
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