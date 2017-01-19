

<!--<a href="#" onclick="javascript:history.back();">Sites</a>-->
<?= $this->start('Breadcrumb'); ?>
    <li>Site</li>
    <li><?= h($site->name) ?></li>
<?= $this->end(); ?>

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
                    <th><?= __('Date BP préfixée > ou <') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($site->datations as $datation): ?>
                    <tr onclick='voirDetail("<?= Cake\Routing\Router::url(['controller' => 'datations', 'action' => 'view', $datation->id]); ?>")'>
                    <td><?= $this->Number->format($datation->date_bp) ?></td>
                    <td><?= $this->Number->format($datation->erreur_standard) ?></td>
                    <td><?= h($datation->date_calibree) ?></td>
                    <td><?= h($site->name) ?></td>
                    <td><?= $datation->has('laboratoire') ? $this->Html->link($datation->laboratoire->code_laboratoire, ['controller' => 'Laboratoires', 'action' => 'view', $datation->laboratoire->id]) : '' ?></td>
                    <td><?= h($datation->code_reference) ?></td>
                    <td><?= h($datation->type_datation) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
