

<?= $this->start('Breadcrumb'); ?>
    <li>Sites</li>
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
                <th><?= $this->Paginator->sort('name', 'Nom du site') ?></th>
                <th><?= $this->Paginator->sort('type', 'Type de site') ?></th>
                <th><?= $this->Paginator->sort('contry', 'Pays') ?></th>
                <th><?= $this->Paginator->sort('province', 'Province') ?></th>
                <th><?= $this->Paginator->sort('latitude', 'Latitude') ?></th>
                <th><?= $this->Paginator->sort('longitude', 'Longitude') ?></th>
            </tr>
            </thead>
            <tr>
                <td><?= $this->Search->displayField('name', 'string'); ?></td>
                <td><?= $this->Search->displayField('type', 'string'); ?></td>
                <td><?= $this->Search->displayField('contry', 'string'); ?></td>
                <td><?= $this->Search->displayField('province', 'string'); ?></td>
                <td><?= $this->Search->displayField('latitude', 'number'); ?></td>
                <td><?= $this->Search->displayField('longitude', 'number'); ?></td>
            </tr>
            <tbody id="data_table_body">
            <?php if(count($sites) > 0): ?>
                <?php foreach ($sites as $site): ?>
                <tr onclick='voirDetail("<?= Cake\Routing\Router::url(['controller' => 'sites', 'action' => 'view', $site->id]); ?>")'>
                    <td><?= h($site->name) ?></td>
                    <td><?= h($site->type) ?></td>
                    <td><?= h($site->contry) ?></td>
                    <td><?= h($site->province) ?></td>
                    <td><?= $this->Number->format($site->latitude) ?></td>
                    <td><?= $this->Number->format($site->longitude) ?></td>
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

