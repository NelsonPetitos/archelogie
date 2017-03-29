
<?= $this->start('Breadcrumb'); ?>
    <li>Datations</li>
<?= $this->end(); ?>

<?= $this->Search->setSearchUrl($searchUrl); ?>

<div class="btn-group" style="position: relative; float: right; padding-bottom: 10px">
    <?= $this->element('page_limit'); ?>
</div>

<input type="hidden" id="sitedetailUrl" value="<?= Cake\Routing\Router::url(['controller'=>'Sites', 'action'=>'view', 'prefix'=>'afrique']); ?>" />
<div class="col-md-12">
    <div class="row">
        <table id="archeologie_table" class="custom__table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('date_bp', 'Date Before Present') ?></th>
                    <th><?= $this->Paginator->sort('erreur_standard', 'Erreur standard') ?></th>
                    <th><?= $this->Paginator->sort('date_calibree', 'Date calibrée') ?></th>
                    <th><?= $this->Paginator->sort('site_id', 'Nom du site') ?></th>
                    <th><?= $this->Paginator->sort('laboratoire_id', 'Laboratoire') ?></th>
                    <th><?= $this->Paginator->sort('code_reference', 'Code de l\'échantillon') ?></th>
                </tr>
            </thead>
            <tr>
                <th><?= $this->Search->displayField('date_bp', 'number'); ?></th>
                <th><?= $this->Search->displayField('erreur_standard', 'number'); ?></th>
                <th><?= $this->Search->displayField('date_calibree', 'string'); ?></th>
                <th><?= $this->Search->displayField('site_id', 'string', true); ?></th>
                <th><?= $this->Search->displayField('laboratoire_id', 'string', true); ?></th>
                <th><?= $this->Search->displayField('code_reference', 'string'); ?></th>
            </tr>
            <tbody id="data_table_body">
                <?php if(count($datations) > 0): ?>
                    <?php foreach ($datations as $datation): ?>
                        <tr onclick='voirDetail("<?= Cake\Routing\Router::url(['controller' => 'datations', 'action' => 'view', $datation->id]); ?>")'>
                            <td><?= $datation->date_bp ?></td>
                            <td><?= $datation->erreur_standard ?></td>
                            <td><?= $datation->date_calibree ?></td>
                            <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
                            <td><?= $datation->laboratoire->code_laboratoire ?></td>
                            <td><?= $datation->code_reference ?></td>
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

<?= $this->start('script'); ?>

<?= $this->end(); ?>
