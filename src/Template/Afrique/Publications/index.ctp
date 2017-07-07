<?= $this->start('Breadcrumb'); ?>
<li>Publications</li>
        <?= $this->end(); ?>

        <?= $this->Search->setSearchUrl($searchUrl); ?>

<div class="btn-group" style="position: relative; float: right; padding-bottom: 10px">
<?= $this->element('page_limit'); ?>
</div>

        <!--<?php debug($publications); ?>-->

<div class="col-md-12">
<div class="row">
    <table class="custom__table">
        <thead>
            <tr>
                <th>Auteur(s)</th>
                <th><?= $this->Paginator->sort('annee', 'Année') ?></th>
                <th><?= $this->Paginator->sort('title', 'Titre de la publication') ?></th>
            </tr>
        </thead>
        <tr>
            <th><?= $this->Search->displayField('auteurs', 'none'); ?></th>
            <th><?= $this->Search->displayField('annee', 'number'); ?></th>
            <th><?= $this->Search->displayField('title', 'string'); ?></th>
        </tr>
        <tbody id="data_table_body">
            <?php if(count($publications) > 0): ?>
            <?php foreach ($publications as $publication): ?>
            <tr onclick='voirDetail("<?= Cake\Routing\Router::url(['controller' => 'publications', 'action' => 'view', $publication->id]); ?>")'>
                <td>
                    <?php foreach ($publication->auteurs as $auteur): ?>
                        <?= $auteur->name.", " ?>
                    <?php endforeach; ?>
                </td>
                <td><?= __($publication->annee) ?></td>
                <td><?= h($publication->title) ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="my__pagination" id="pagination_box" style="display: inline;">
<?= $this->element('pagination'); ?>
</div>
        </div>