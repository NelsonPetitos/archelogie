<?= $this->start('Breadcrumb'); ?>
    <li>Site</li>
    <li><?= h($site->name) ?></li>
<?= $this->end(); ?>

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">Datations</div>
            <div class="panel-body">
                <table class="my__table">
                    <tr>
                        <th><?= __('Nom du site') ?></th>
                        <td id="sitename"><?= $site->name  ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Type de site') ?></th>
                        <td><?= h($site->type) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Pays') ?></th>
                        <td><?= $site->contry ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Province') ?></th>
                        <td><?= $site->province ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Latitude') ?></th>
                        <td id="lalat"><?= $site->latitude ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Longitude') ?></th>
                        <td id="lalong"><?= $site->longitude ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div id="map__cartographie" style="width: 100%; height: 300px;"></div>
    </div>
</div>

<div class="sites view large-9 medium-8 columns content">
    <div class="related">
        <h4><?= __('Datations issues du site') ?></h4>
        <?php if (!empty($site->datations)): ?>
            <table  class="custom__table">
                <thead>
                <tr>
                    <th><?= __('Date Before Present') ?></th>
                    <th><?= __('Erreur standard') ?></th>
                    <th><?= __('Date calibrée') ?></th>
                    <th><?= __('Nom du site') ?></th>
                    <th><?= __('laboratoire') ?></th>
                    <th><?= __('Code de l\'échantillon') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($site->datations as $datation): ?>
                <tr onclick='voirDetail("<?= Cake\Routing\Router::url(['controller' => 'datations', 'action' => 'view', $datation->id]); ?>")'>
                    <td><?= $datation->date_bp ?></td>
                    <td><?= $datation->erreur_standard ?></td>
                    <td><?= $datation->date_calibree ?></td>
                    <td><?= $site->name ?></td>
                    <td><?= explode("-",$datation->code_reference)[0] ?></td>
                    <td><?= $datation->code_reference ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

