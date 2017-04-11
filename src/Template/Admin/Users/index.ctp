<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer un utilisateur'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('created', 'Date création') ?></th>
                            <th><?= $this->Paginator->sort('modified', 'Date dernière modification') ?></th>
                            <th><?= $this->Paginator->sort('role_id', 'Role du compte') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>
                                <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> ', ['action' => 'edit', $user->id], ['escape' => false, 'class' => 'space-right']) ?>
                                    <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $user->id], ['confirm' => __('Voulez vous supprimer {0}?', $user->email), 'escape' => false]) ?>
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
