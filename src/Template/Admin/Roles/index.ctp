<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer un rôle'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
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
                                <?= $this->Html->link('<span class="glyphicon glyphicon-search"></span> ', ['action' => 'view', $role->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> ', ['action' => 'edit', $role->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $role->id], ['confirm' => __('Voulez vous supprimer {0}?', $role->name), 'escape' => false]) ?>
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