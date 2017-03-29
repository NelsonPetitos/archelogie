<?= $this->start('Breadcrumb'); ?>
<li>Datation</li>
<li><?= h($datation->code_reference) ?></li>
        <?= $this->end(); ?>

<div class="row">
<div class="col-lg-5">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">Datations</div>
            <div class="panel-body">
                <table class="my__table">
                    <tr>
                        <td>Objets datés</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Date "Before Present"</td>
                        <td><?= $datation->date_bp ?></td>
                    </tr>
                    <tr>
                        <td>Date calibrée</td>
                        <td><?= $datation->date_calibree ?></td>
                    </tr>
                    <tr>
                        <td>Erreur standard</td>
                        <td><?= $datation->erreur_standard ?></td>
                    </tr>
                    <tr>
                        <td>Discipline</td>
                        <td><?= $datation->discipline ?></td>
                    </tr>
                    <tr>
                        <td>Attribution chronoculturelle</td>
                        <td><?= $datation->culture_associee ?></td>
                    </tr>
                    <tr>
                        <td>Année de prise de l'échantillon</td>
                        <td><?= $datation->annee_prise_echantillon ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">Publications associés</div>
            <div class="panel-body">
                <ul>
                    <?php foreach ($datation->publications as $publications): ?>
                    <li>
                        <?= h($publications->annee) ?> -
                        <?= h($publications->title) ?> -
                        <?= h($publications->reference) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">objets associés</div>
            <div class="panel-body">
                <ul>
                    <?php foreach ($datation->materiels as $materiels): ?>
                    <li><?= h($materiels->name) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="col-md-7">
    <div class="panel panel-info" >
        <div class="panel-heading">Divers</div>
        <div class="panel-body">
            <table class="my__table">
                <tr>
                    <td>Code du laboratoire d'analyse</td>
                    <td><?= $datation->has('laboratoire') ? h($datation->laboratoire->code_laboratoire) : '' ?></td>
                </tr>
                <tr>
                    <td>Intitulé du laboratoire</td>
                    <td><?= $datation->has('laboratoire') ? h($datation->laboratoire->description) : '' ?></td>
                </tr>
                <tr>
                    <td>Code de référence de l'échantillon</td>
                    <td><?=  h($datation->code_reference) ?></td>
                </tr>
                <tr>
                    <td>Site de récolte</td>
                    <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
                </tr>
                <tr>
                    <td>Type de site</td>
                    <td><?= $datation->has('site') ? h($datation->site->type) : '' ?></td>
                </tr>
                <tr>
                    <td>Horizon culturel</td>
                    <td><?= $datation->horizon_culturel ?></td>
                </tr>
                <tr>
                    <td>Numéro de structure</td>
                    <td><?= $datation->numero_structure ?></td>
                </tr>
                <tr>
                    <td>Pays</td>
                    <td><?= $datation->has('site') ? h($datation->site->contry) : '' ?></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><?= $datation->has('site') ? h($datation->site->province) : '' ?></td>
                </tr>
                <tr>
                    <td>Latitude</td>
                    <td><?= $datation->has('site') ? h($datation->site->latitude) : '' ?></td>
                </tr>
                <tr>
                    <td>Longitude</td>
                    <td><?= $datation->has('site') ? h($datation->site->longitude) : '' ?></td>
                </tr>
                <tr>
                    <td>Détails du site de récolte</td>
                    <td><?= $datation->detail_site_recolte ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>