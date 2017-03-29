 <div class="row">
    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">Détails du site</div>
            <div class="panel-body">
                <table style="border-collapse: separate;border-spacing: 1.5em 1.5em;">
                    <tr>
                        <th><?= __('Nom du site') ?></th>
                        <td><?= h($site->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Type de site') ?></th>
                        <td><?= h($site->type) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Pays') ?></th>
                        <td><?= h($site->contry) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Province') ?></th>
                        <td><?= h($site->province) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Distribution geagraphique') ?></th>
                        <td><?= $site->has('source') ? $site->source->description: '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Latitude') ?></th>
                        <td><?= $this->Number->format($site->latitude) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Longitude') ?></th>
                        <td><?= $this->Number->format($site->longitude) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Nombre de datation(s) associée(s)') ?></th>
                        <td><?= $this->Number->format($site->datation_count) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Date création') ?></th>
                        <td><?= h($site->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Date dernière modification') ?></th>
                        <td><?= h($site->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div id="map__cartographie" style="width: 100%; height: 390px;"></div>
    </div>
</div>