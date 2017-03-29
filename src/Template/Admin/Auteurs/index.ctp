<div id="wrapper">
    <?= $this->Search->setSearchUrl($searchUrl); ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <?= $this->Html->link(__('Créer un auteur'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
                        <div class="btn-group" style="position: relative; float: right;">
                            <?= $this->element('page_limit'); ?>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="archeologie_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('name', 'Nom de l\'auteur') ?></th>
                                    <!--<th><?= $this->Paginator->sort('created', 'Date de creation') ?></th>-->
                                    <!--<th><?= $this->Paginator->sort('modified', 'Date de modification') ?></th>-->
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                                <tr>
                                    <th><?= $this->Search->displayField('name', 'string'); ?></th>
                                </tr>
                            </thead>
                            <tbody id="data_table_body">
                                <?php foreach ($auteurs as $auteur): ?>
                                <tr>
                                    <td><?= h($auteur->name) ?></td>
                                    <!--<td><?= date_format($auteur->created, 'd/m/Y, H:i') ?></td>-->
                                    <!--<td><?= date_format($auteur->modified, 'd/m/Y, H:i') ?></td>-->
                                    <td class="actions">
                                        <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $auteur->id], ['escape' => false, 'class' => 'space-right']) ?>
                                        <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', ['action' => 'delete', $auteur->id], ['confirm' => __('Voulez vous supprimer {0}?', $auteur->name), 'escape' => false]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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
</div>

