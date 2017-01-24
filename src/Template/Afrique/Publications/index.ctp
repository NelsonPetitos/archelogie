

<?= $this->start('Breadcrumb'); ?>
    <li>Publications</li>
<?= $this->end(); ?>

<?= $this->Search->setSearchUrl($searchUrl); ?>

<div class="btn-group" style="position: relative; float: right; padding-bottom: 10px">
    <?= $this->element('page_limit'); ?>
</div>

<div class="col-md-12">
    <div class="row">
        <table class="custom__table">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('title', 'Titre de la publication') ?></th>
                <th><?= $this->Paginator->sort('annee', 'Année') ?></th>
                <th><?= $this->Paginator->sort('reference', 'Reférence bibliographique') ?></th>
            </tr>
            </thead>
            <tr>
                <th><?= $this->Search->displayField('title', 'string'); ?></th>
                <th><?= $this->Search->displayField('annee', 'number'); ?></th>
                <th><?= $this->Search->displayField('reference', 'string'); ?></th>
            </tr>
            <tbody id="data_table_body">
                <?php if(count($publications) > 0): ?>
                    <?php foreach ($publications as $publication): ?>
                    <tr onclick='voirDetail("<?= Cake\Routing\Router::url(['controller' => 'publications', 'action' => 'view', $publication->id]); ?>")'>
                        <td><?= h($publication->title) ?></td>
                        <td><?= __($publication->annee) ?></td>
                        <td><?= h($publication->reference) ?></td>
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