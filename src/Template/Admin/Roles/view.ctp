<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <button class="btn btn-sm btn-primary" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Retour</button>
                    <div class="btn-group" style="position: relative; left: 10%;">
                        <h3><?= __('Compte(s) du rôle {0}', $role->name) ?></h3>
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Date création') ?></th>
                            <th><?= __('Date dernière modification') ?></th>
                            <th><?= __('Role du compte') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(count($role->users) == 0): ?>
                            <tr>
                                <td style="text-align: center;" colspan="5">Pas de comptes relatifs a ce rôle</td>
                            </tr>
                        <?php endif; ?>
                        <?php foreach ($role->users as $user): ?>
                        <tr>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td><?= $role->name ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> ', [ 'controller' => 'Users', 'action' => 'edit', $user->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', [ 'controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => __('Voulez vous supprimer {0}?', $user->email), 'escape' => false]) ?>
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
<!-- /.row -->
</section>
