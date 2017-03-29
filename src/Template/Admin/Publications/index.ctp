
<?= $this->Search->setSearchUrl($searchUrl); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer un publication'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('title', 'Titre de la publication') ?></th>
                            <th><?= $this->Paginator->sort('annee', 'Année') ?></th>
                            <th><?= $this->Paginator->sort('reference', 'Reférence bibliographique') ?></th>
                            <!--<th><?= $this->Paginator->sort('created') ?></th>-->
                            <!--<th><?= $this->Paginator->sort('modified') ?></th>-->
                            <th class="actions" ><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('title', 'string'); ?></th>
                            <th><?= $this->Search->displayField('annee', 'number'); ?></th>
                            <th><?= $this->Search->displayField('reference', 'string'); ?></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                        <?php foreach ($publications as $publication): ?>
                        <tr>
                            <td><?= h($publication->title) ?></td>
                            <td><?= __($publication->annee) ?></td>
                            <td><?= h($publication->reference) ?></td>
                            <!--<td><?= h($publication->created) ?></td>-->
                            <!--<td><?= h($publication->modified) ?></td>-->
                            <td class="actions">
                                <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $publication->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span> ', ['action' => 'delete', $publication->id], ['confirm' => __('Voulez vous supprimer ?'), 'escape' => false]) ?>
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