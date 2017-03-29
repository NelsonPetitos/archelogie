<?= $this->start('title'); ?>Les liens utiles<?= $this->end(); ?>

<?= $this->start('Navigation'); ?>
<?= $this->element('navigation', ['activeClass' => 3]); ?>
<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
<?= $this->element('carousel'); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><span class="glyphicon glyphicon-book"></span> Contacts</h3>
            <ol class="breadcrumb">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>"><span class="glyphicon glyphicon-home"></span> Site</a>
                </li>
                <li class="active">Contacts</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Geoffroy de Saulieu </h3><hr/>
            <div class="archeo_card">
                <?= $this->Html->image('geoffroy.jpg', ['alt' => 'Geoffroy de Saulieu']); ?>
                <p>
                    Institut de Recherche pour le Développement<br/>
                    (IRD - France)<br/><br/>
                    UMR 208<br/>
                    PALOC (Patrimoines Locaux)<br/><br/>
                    Tel: +43<br/>
                    E-Mail: geoffroy.desaulieu@ird.fr<br/><br/>
                    Projet région : Afrique Centrale / Amazonie
                </p><br/>
            </div>
            <hr/>
        </div>

        <div class="col-md-6">
            <h3>Richard Oslisly</h3><hr/>
            <div class="archeo_card">
                <?= $this->Html->image('richard.jpg', ['alt' => 'Richard Oslisly']); ?>
                <p>
                    Géoarchéologue<br/>
                    Spécialiste de l’Afrique centrale<br/><br/>
                    Chargé de recherches à l’IRD<br/><br/>
                    UMR PALOC<br/>
                    Yaoundé<br/><br/>
                    E-Mail: oslisly.richard@orange.fr<br/><br/>
                    Projet région : Afrique Centrale
                </p>
            </div>
            <hr/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Yannick Garcin</h3><hr/>
            <div class="archeo_card">
                <?= $this->Html->image('yannick.jpg', ['alt' => 'Yannick Garcin']); ?>
                <p>
                    DFG own position at the University of Potsdam<br/>
                    Project GA 1629/2-1&2: “HYDROMAN"<br/><br/>

                    Karl-Liebknecht-Str. 24-25<br/>
                    14476 Potsdam-Golm<br/><br/>

                    Tel.: +49 331 977 5837<br/>
                    Fax: +49 331 977 5700<br/><br/>
                    E-Mail: Yannick.Garcin@geo.uni-potsdam.de<br/><br/>
                    Projet région : Afrique Centrale<br/>
                </p>
            </div>
            <hr/>
        </div>

        <div class="col-md-6">
            <h3>Stéphen Rostain </h3><hr/>
            <div class="archeo_card">
                <?= $this->Html->image('stephen.png', ['alt' => 'Stéphen Rostain']); ?>
                <p>
                    Directeur de recherche, CNRS<br/>
                    UMR 8096<br/>
                    Archéologie des Amériques<br/><br/>
                    E-Mail: stephen.rostain@mae.u-paris10.fr<br/><br/>
                    Projet région : Amazonie
                </p><br/><br/><br/><br/><br/>
            </div>
            <hr/>
        </div>

    </div>
</div>
