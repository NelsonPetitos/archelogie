<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => '5']); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <li>Cartographie</li>
<?= $this->end(); ?>

<?= $this->element('loader'); ?>

<input type="hidden" id="maximum" value="<?= $maximum ?>" />
<input type="hidden" id="minimum" value="<?= $minimum ?>" />
<input type="hidden" id="mapregion" value="afrique" />
<input type="hidden" id="iconrougeurl" value="<?= $this->Url->image('cercle-rouge-icone-5972-16.png'); ?>" />
<input type="hidden" id="iconjauneurl" value="<?= $this->Url->image('cercle-jaune-icone-9126-16.png'); ?>" />
<input type="hidden" id="mapdatasurl" value="<?= Cake\Routing\Router::url(['controller' => 'Datations', 'action' => 'getSessionDatations', 'prefix' => 'afrique']);?>"/>
<input type="hidden" id="ajaxSliderUrl" value="<?= Cake\Routing\Router::url(['controller' => 'Datations', 'action' => 'cartographie', 'prefix' => 'afrique']);?>"/>

<div class="row">
    <div class="col-md-12">
        <div class="col-md-5" >
            <table class="my__table">
                <tr>
                    <td colspan="2">La distribution géographique des sites archéologiques peut-être abordée selon deux méthodes : </td>
                </tr>
                <tr>
                    <td colspan="2">1 - les valeurs cumulées -> visualisation des sites dont les datations sont comprises entre deux valeurs min et max,</td>
                </tr>
                <tr>
                    <td colspan="2">2 - les valeurs non cumulées -> visualisation des sites pour une datation définie par une saisie manuelle ou par un déplacement du curseur sur la régle graduée à l'aide d'un clic.</td>
                </tr>
                <tr>
                    <td><img src="<?= $this->Url->image('cercle-rouge-icone-5972-16.png'); ?>" alt="rouge" /></td>
                    <td>Site dont la datation est égale à la date BP</td>
                </tr>
                <tr>
                    <td><img src="<?= $this->Url->image('cercle-jaune-icone-9126-16.png'); ?>" alt="jaune" /></td>
                    <td>Site compris dans l'interval de l'erreur standard</td>
                </tr>
                <tr>
                    <td><b>BP : </b></td>
                    <td>Before Present</td>
                </tr>
                <tr>
                    <td><b>Note : </b></td>
                    <td>before present correspond à 1950</td>
                </tr>
                <tr>
                    <td>Valeurs cumulées :</td>
                    <td><input type="radio" name="cumul" value="oui" /></td>
                </tr>
                <tr class="bloc_saisie_cumul">
                    <td><input type="text" id="cumulMin"  disabled="true" /></td>
                    <td><input type="text" id="cumulMax"  disabled="true" /></td>
                </tr>
                <tr class="bloc_saisie_cumul">
                    <td colspan="2" ><input type="button" disabled="true" value="Valider" id="recherche"/></td>
                </tr>
                <tr>
                    <td>Valeurs non cumulées :</td>
                    <td><input type="radio" name="cumul" value="non" checked="checked" /></td>
                </tr>
                <tr id="valeurSaisie" class="bloc_saisie_non_cumul">
                    <td>Saisir une date "before present" :</td>
                    <td>
                        <input type="text" id="datebp" />
                        <input  type="hidden"  value="" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-7" style="padding: 0;">
            <div id="map__cartographie" style="width: 100%; height: 500px;"></div>
        </div>
    </div>
</div>

<div class="row" style="margin: 20px 0px;">
    <div class="col-md-12" >
        <table style="width: 100%;">
            <tr id="slider_id" class="bloc_saisie_non_cumul">
                <td colspan="2">
                    <div id="alternating-slider"></div>
                </td>
            </tr>
            <tr id="slider-cumul" class="bloc_saisie_cumul">
                <td colspan="2">
                    <div id="alternating-slider-cumul"></div>
                </td>
            </tr>
        </table>
    </div>
</div>


<?php $index = 0; $mapdatations = []; ?>
<?php foreach ($datations as $datation): ?>
<?php $mapdatations[$index++] =  $datation ; ?>
<?php endforeach; ?>
<?php $this->request->session()->write('mapdatations', $mapdatations); ?>

<?= $this->start('script'); ?>
    <?= $this->Html->script('cartographie'); ?>
<?= $this->end(); ?>
