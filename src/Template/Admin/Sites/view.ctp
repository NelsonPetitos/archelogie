<section class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-sm btn-primary" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Retour</button>
                <div class="btn-group" style="position: relative; float: right;">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Éditer', ['action' => 'edit', $site->id], ['class' => 'btn btn-sm btn-primary', 'escape' => false]) ?>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">Détails du site</div>

                        <div class="panel-body">
                            <table style="border-collapse: separate;border-spacing: 1.5em 1.5em;">
                                <tr>
                                    <th>Site de récolte</th>
                                    <td id="sitename"><?= $site->name  ?></td>
                                </tr>
                                <tr>
                                    <th>Type de site</th>
                                    <td><?= $site->has('type') ? h($site->type) : '/' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Repartition géographique') ?></th>
                                    <td><?= $site->has('source') ? $site->source->description : '/' ?></td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td><?= $site->contry ?></td>
                                </tr>
                                <tr>
                                    <th>Province</th>
                                    <td><?= $site->province ?></td>
                                </tr>
                                <tr>
                                    <th>Latitude</th>
                                    <td id="lalat"><?= $site->latitude ?></td>
                                </tr>
                                <tr>
                                    <th>Longitude</th>
                                    <td id="lalong"><?= $site->longitude ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Datation Count') ?></th>
                                    <td><?= $this->Number->format($site->datation_count) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Date de création') ?></th>
                                    <td><?= date_format($site->created, 'd/m/Y, H:i') ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Date de dernière modification') ?></th>
                                    <td><?= date_format($site->modified, 'd/m/Y, H:i') ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="map__cartographie" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>