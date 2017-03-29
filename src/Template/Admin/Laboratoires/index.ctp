<?= $this->Search->setSearchUrl($searchUrl); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer un laboratoire'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('code_laboratoire') ?></th>
                            <th><?= $this->Paginator->sort('description') ?></th>
                            <!--<th><?= $this->Paginator->sort('created') ?></th>-->
                            <!--<th><?= $this->Paginator->sort('modified') ?></th>-->
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('code_laboratoire', 'string') ?></th>
                            <th><?= $this->Search->displayField('description', 'string') ?></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                        <?php foreach ($laboratoires as $laboratoire): ?>
                            <tr>
                                <td><?= h($laboratoire->code_laboratoire) ?></td>
                                <td><?= h($laboratoire->description) ?></td>
                                <!--<td><?= date_format($laboratoire->created, 'd/m/Y, H:i') ?></td>-->
                                <!--<td><?= date_format($laboratoire->modified, 'd/m/Y, H:i') ?></td>-->
                                <td class="actions">
                                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $laboratoire->id], ['escape' => false, 'class' => 'space-right']) ?>
                                    <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $laboratoire->id], ['confirm' => __('Voulez vous supprimer {0}?', $laboratoire->code_laboratoire), 'escape' => false]) ?>
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