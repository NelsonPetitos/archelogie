
<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 5]); ?>
        <?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <li>Accueil</li>
<?= $this->end(); ?>
<div class="row">
    <div class="col-xs-12">
        <p class="text-justify">
            La plateforme des données archéologiques d’Afrique centrale  est un outil de gestion et de diffusion de résultats archéologiques publiés concernant l’Afrique Centrale (Cameroun, Guinée Equatoriale, Gabon, Congo, RDC).
        </p>
    </div>
</div>
<div class="row" >
    <div class="col-xs-7">
        <p class="text-justify">
            Elle centralise sur la base de donnée des datations radiocarbones publiées, différentes informations comme le type de matériel inventorié (lithique, fer, céramique, etc.), ou le type de site (fouille de fosse dépotoir, niveau d’occupation, fouille en grotte, zone humide, etc.). Elle permet également grâce à la référence bibliographique de remonter à la publication source lorsque cela est possible (liens vers les sites éditoriaux).<br /><br />
        </p>
        <p class="text-justify">
            Cette base de données tente de donner pour la première fois une vision spatiale et chronologique des données archéologiques accumulées depuis ces cinquante dernières années en Afrique Centrale.<br /><br />
        </p>
        <p class="text-justify">
            Cette base est perfectible, mais est conçue comme un outil devant répondre aux problématiques que se posent scientifiques, enseignants et toutes personnes soucieuses du patrimoine culturel d’une région encore mal connue.<br /><br />
        </p>
    </div>
    <div class="col-xs-5">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php echo $this->Html->image('afrique/1.png', ['alt' => 'Image 1', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 1</h3>
                        <p>Les outils des peuples...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('afrique/2.png', ['alt' => 'Image 2', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 2</h3>
                        <p>Poterie du moyen ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('afrique/3.png', ['alt' => 'Image 3', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 3</h3>
                        <p>Vestige de la civilisation ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('afrique/4.png', ['alt' => 'Image 4', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 4</h3>
                        <p>Les ustensils du  ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('afrique/5.png', ['alt' => 'Image 5', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 5</h3>
                        <p>Artéfact de la période ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('afrique/6.png', ['alt' => 'Image 6', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 6</h3>
                        <p>Une equipe au service ...</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>
</div>

