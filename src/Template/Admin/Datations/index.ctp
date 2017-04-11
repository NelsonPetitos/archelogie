<?= $this->Search->setSearchUrl($searchUrl); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->Html->link(__('Créer une datation'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
                    <div class="btn-group" style="position: relative; float: right;">
                        <?= $this->element('page_limit'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="archeologie_table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('date_bp', 'Date Before Present') ?></th>
                            <th><?= $this->Paginator->sort('erreur_standard', 'Erreur standard') ?></th>
                            <th><?= $this->Paginator->sort('date_calibree', 'Date calibrée') ?></th>
                            <th><?= $this->Paginator->sort('site_id', 'Nom du site') ?></th>
                            <th><?= $this->Paginator->sort('laboratoire_id', 'Laboratoire') ?></th>
                            <th><?= $this->Paginator->sort('code_reference', 'Code de l\'échantillon') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <tr>
                            <th><?= $this->Search->displayField('date_bp', 'number'); ?></th>
                            <th><?= $this->Search->displayField('erreur_standard', 'number'); ?></th>
                            <th><?= $this->Search->displayField('date_calibree', 'string'); ?></th>
                            <th><?= $this->Search->displayField('site_id', 'string', true); ?></th>
                            <th><?= $this->Search->displayField('laboratoire_id', 'string', true); ?></th>
                            <th><?= $this->Search->displayField('code_reference', 'string'); ?></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="data_table_body">
                        <?php foreach ($datations as $datation): ?>
                        <tr>
                            <td><?= __($datation->date_bp) ?></td>
                            <td><?= __($datation->erreur_standard) ?></td>
                            <td><?= h($datation->date_calibree) ?></td>
                            <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
                            <td><?= $datation->has('laboratoire') ? $this->Html->link($datation->laboratoire->code_laboratoire, ['controller' => 'Laboratoires', 'action' => 'view', $datation->laboratoire->id]) : '' ?></td>
                            <td><?= h($datation->code_reference) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<span class="glyphicon glyphicon-search"></span> ', ['action' => 'view', $datation->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> ', ['action' => 'edit', $datation->id], ['escape' => false, 'class' => 'space-right']) ?>
                                <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $datation->id], ['confirm' => __('Voulez vous supprimer ?'), 'escape' => false]) ?>
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
    <input type="hidden" id="sitedetailUrl" value="<?= Cake\Routing\Router::url(['controller'=>'Sites', 'action'=>'view', 'prefix'=>'admin']); ?>" />
    <div class="row">
        <div class="col-sm-12" id="pagination_box">
            <?= $this->element('pagination'); ?>
        </div>
    </div>
<!-- /.row -->
</section>
