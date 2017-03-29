<?= $this->start('title'); ?>Accueil<?= $this->end(); ?>

<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation',['activeClass' => 1]); ?>
<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
    <?= $this->element('carousel'); ?>
<?= $this->end(); ?>

<?= $this->Html->script('carousel', ['block' => true]); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> Plateforme des datations archéologiques intertropicales </h3>
            <ol class="breadcrumb">
                <li><a class="text-center" href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>"><span class="glyphicon glyphicon-home"></span> Site</a>
                </li>
                <li class="active">Présentation</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8" >
            <div class="row" style="font-size: 13px; text-align: justify;line-height: 1.5em;">
                <p>
                    Le site a pour objectif de collectionner les données archéologiques datées de la ceinture intertropicale afin de fournir un outil favorisant l’interdisciplinarité ainsi que l’émergence d’une démarche scientifique tropicaliste.
                </p>
                <p>
                    La base de donnée est en cours de construction et vise à terme à rassembler toute la ceinture intertropicale mondiale.
                </p>
                <p>
                    Les données rassemblées concernent des informations archéologiques datées par des méthodes physicochimique et situées entre les tropiques du Cancer et du Capricorne, mais prioritairement dans les régions à climat tropical humide. Le découpage géographique tente toutefois de prendre en compte les bassins versants et/ou les grandes régions culturelles. Par exemple l’Amazonie comprend le bassin de l’Amazone, le bassin de l’Orénoque et le plateau des Guyanes.
                </p>
                <p>
                    Les informations sont tirées des publications scientifiques mentionnées qui ne sont pas forcément les publications sources, mais permettant d’y remonter.
                </p>
                <p>
                    Les datations sont affichées en âge non calibré. Lorsqu’une calibration est proposée elle n’est qu’indicative car elle a été obtenue en utilisant le logiciel Oxcal v4.2 sans prendre en compte la latitude.
                </p>
                <p>
                    Nous avons voulu géo référencer les données, ce qui a exigé la plupart du temps des recherches longues pour trouver les coordonnées géographiques en degrés décimaux les plus précises possibles en fonction des indications publiées.
                </p>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                    <h2 class="page-header">Plateformes disponibles</h2>
                </div>

                <div class="col-md-6">
                    <div class="map__card">
                        <?= $this->Html->script("http://maps.google.com/maps/api/js?key=AIzaSyAt76Pcfr0uKwMgicAtyksRa6hkXyYKep0&sensor=false", array(false)); ?>
                        <?php
                                $map_options_one = [
                                "id"         => "map_canvas",
                                "width"      => "350px",
                                "height"     => "400px",
                                "zoom"       => 4,
                                "localize"   => false,
                                'type' => 'HYBRID',
                                'latitude' => 2.15055,
                                'longitude' => 13.34027,
                                ];
                                ?>
                        <?= $this->GoogleMap->map($map_options_one); ?>
                        <div class="map__description">
                            <div class="map__description__title">Afrique Centrale</div>
                            <div class="map__description__body">Zone géographique des sites archéologiques d'Afrique Centrale.</div><br/>
                            <div class="map__description_footer">
                                <?= $this->Html->link('Répartition spatiale des sites', '/afrique/datations/cartographie', ['class' => 'btn btn-primary']); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <div class="map__card">
                        <?php
                            $map_options_two = [
                                "id"         => "map_canvas_two",
                                "width"      => "350px",
                                "height"     => "400px",
                                "zoom"       => 4,
                                "localize"   => false,
                                'type' => 'HYBRID',
                                'latitude' => 2.15055,
                                'longitude' => -64.145810 ,
                                ];
                                ?>
                        <?= $this->GoogleMap->map($map_options_two); ?>

                        <div class="map__description">
                            <div class="map__description__title">Bassin amazonien</div>
                            <div class="map__description__body">Zone géographique des sites archéologiques du bassin amazonien.</div><br/>
                            <div class="map__description_footer">
                                <?= $this->Html->link('Répartition spatiale des sites', '/amazonie/datations/cartographie', ['class' => 'btn btn-primary']); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4" >
            <div class="well">
                <h5><span class="label label-danger">Actualité</span></h5>
                <h5 style="line-height: 1.5em;">Message de l’archéologue Dr. Carla Jaimes Betancourt </h5>
                <p>Chers collègues, Voici le lien de la page web du ...<br/><br/>
                    <a style="float: right;" href="<?= Cake\Routing\Router::url(['_name' => 'actualites_evenements']); ?>">Voir détails</a>
                </p>
            </div>

            <div class="well">
                <h5><span class="label label-success">Publications</span></h5>
                <h5 style="line-height: 1.5em;">Mise en ligne de chaines Youtube </h5>
                <p>Pour la chaine "Patrimoines en Afrique Centrale" ...<br/><br/>
                    <a style="float: right;" href="<?= Cake\Routing\Router::url(['_name' => 'actualites_publications']); ?>">Voir détails</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!--<?= $this->Html->script("http://maps.google.com/maps/api/js?key=AIzaSyAt76Pcfr0uKwMgicAtyksRa6hkXyYKep0&sensor=false", array(false)); ?>-->