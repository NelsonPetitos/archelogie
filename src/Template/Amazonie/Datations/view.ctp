<?= $this->start('Breadcrumb'); ?>
<li>Datation</li>
<li><?= h($datation->code_reference) ?></li>
        <?= $this->end(); ?>

<div class="row">
<div class="col-lg-5">
    <!--<div class="row">-->
    <div class="panel panel-info">
        <div class="panel-heading">Datations</div>
        <div class="panel-body">
            <table style="border-collapse: separate;border-spacing: 1.5em 1.5em;">
                <tr>
                    <th>Date "Before Present"</th>
                    <td><?= $datation->date_bp ?></td>
                </tr>
                <tr>
                    <th>Date calibrée</th>
                    <td><?= $datation->date_calibree ?></td>
                </tr>
                <tr>
                    <th>Erreur standard</th>
                    <td><?= $datation->erreur_standard ?></td>
                </tr>
                <tr>
                    <th>Discipline</th>
                    <td><?= $datation->discipline ?></td>
                </tr>
                <tr>
                    <th>Attribution chronoculturelle</th>
                    <td><?= $datation->culture_associee ?></td>
                </tr>
            </table>
        </div>
    </div>
    <!--</div>-->

    <?php if($datation->has('publications') && count($datation->publications)): ?>
    <div class="panel panel-info">
        <div class="panel-heading">Publications associés</div>
        <div class="panel-body">
            <ul>
                <?php foreach ($datation->publications as $publication): ?>
                <li>
                    <?= h($publication->annee) ?> -
                    <?= h($publication->title) ?> -
                    <?= h($publication->reference) ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif ;?>

    <?php if($datation->has('materiels') && count($datation->materiels)): ?>
    <div class="panel panel-info">
        <div class="panel-heading">Materiels daté</div>
        <div class="panel-body">
            <ul>
                <?php foreach ($datation->materiels as $materiels): ?>
                <li><?= h($materiels->name) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif ;?>

    <?php if($datation->has('objets') && count($datation->objets)): ?>
    <div class="panel panel-info">
        <div class="panel-heading">objets associés</div>
        <div class="panel-body">
            <ul>
                <?php foreach ($datation->objets as $objet): ?>
                <li><?= h($objet->name) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif ;?>
</div>

<div class="col-md-7">
    <div class="panel panel-info" >
        <div class="panel-heading">Laboratoire d'analyse</div>
        <div class="panel-body">
            <table style="border-collapse: separate;border-spacing: 1.5em 1.5em;">
                <tr>
                    <th>Code du laboratoire d'analyse</th>
                    <td><?= $datation->has('laboratoire') ? h($datation->laboratoire->code_laboratoire) : '' ?></td>
                </tr>
                <tr>
                    <th>Intitulé du laboratoire</th>
                    <td><?= $datation->has('laboratoire') ? h($datation->laboratoire->description) : '' ?></td>
                </tr>
                <tr>
                    <th>Code de référence de l'échantillon</th>
                    <td><?=  h($datation->code_reference) ?></td>
                </tr>
                <tr>
                    <th>Année de prise de l'échantillon</th>
                    <td><?= $datation->annee_prise_echantillon ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">Site</div>
        <div class="panel-body">
            <table style="border-collapse: separate;border-spacing: 1.5em 1.5em;">
                <tr>
                    <th>Site de récolte</th>
                    <td><?= $datation->has('site') ? $this->Html->link($datation->site->name, ['controller' => 'Sites', 'action' => 'view', $datation->site->id]) : '' ?></td>
                </tr>
                <tr>
                    <th>Type de site</th>
                    <td><?= $datation->has('site') ? h($datation->site->type) : '' ?></td>
                </tr>
                <tr>
                    <th>Horizon culturel</th>
                    <td><?= $datation->horizon_culturel ?></td>
                </tr>
                <tr>
                    <th>Numéro de structure</th>
                    <td><?= $datation->numero_structure ?></td>
                </tr>
                <tr>
                    <th>Pays</th>
                    <td><?= $datation->has('site') ? h($datation->site->contry) : '' ?></td>
                </tr>
                <tr>
                    <th>Province</th>
                    <td><?= $datation->has('site') ? h($datation->site->province) : '' ?></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><?= $datation->has('site') ? h($datation->site->latitude) : '' ?></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><?= $datation->has('site') ? h($datation->site->longitude) : '' ?></td>
                </tr>
                <tr>
                    <th>Détails du site de récolte</th>
                    <td><?= $datation->detail_site_recolte ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>