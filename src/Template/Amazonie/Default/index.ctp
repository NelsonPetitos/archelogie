
<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 5]); ?>
        <?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <li>Accueil</li>
<?= $this->end(); ?>

<div class="row">
    <div class="col-xs-12">
        <p class="text-justify">
            La plateforme des données archéologiques d’Amazonie est un outil de gestion et de diffusion de résultats archéologiques publiés concernant le massif forestier amazonien (Brésil, Bolivie, Pérou, Equateur, Colombie, Venezuela Guyana, Suriname, Guyane Française.
        </p>
    </div>
</div>
<div class="row" >
    <div class="col-xs-7">
        <p class="text-justify">
            Elle centralise sur la base de donnée des datations radiocarbones publiées, différentes informations comme le type de matériel daté, le type de site et les méthode de fouilles (terra preta, fosse, sondage, tranchée, monticule, sol d’occupation, fouille en grotte, etc.),
            la tradition céramique et son éventuelle appartenance à une horizon stylistique. Elle permet également grâce à la référence bibliographique de remonter à la publication source lorsque cela est possible.
        </p>
        <p class="text-justify">
            Cette base de données tente de donner pour la première fois une vision spatiale et chronologique des données archéologiques accumulées depuis ces cinquante dernières années en Amazonie.
        </p>
        <p class="text-justify">
            Cette base est perfectible, mais est conçue comme un outil devant répondre aux problématiques que se posent scientifiques, enseignants et toutes personnes soucieuses du patrimoine culturel d’une région encore mal connue.
            Pour toutes utilisations ou questions d’ordre scientifique, prière de contacter Geoffroy de Saulieu (geoffroy.desaulieu@ird.fr) (UMR 208 PALOC "Patrimoines locaux et gouvernance" IRD-MNHN) ou Stéphen Rostain (stephen.rostain@mae.u-paris10.f)
            (UMR 8096 ArchAm “Archéologie des Amériques” CNRS-Université de Paris I Panthéon-Sorbone)<br/><br/>Bonne visite !
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
                    <?php echo $this->Html->image('amazonie/1.jpg', ['alt' => 'Image 1', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 1</h3>
                        <p>Les outils des peuples...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/2.jpg', ['alt' => 'Image 2', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 2</h3>
                        <p>Poterie du moyen ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/3.jpg', ['alt' => 'Image 3', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 3</h3>
                        <p>Vestige de la civilisation ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/4.jpg', ['alt' => 'Image 4', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 4</h3>
                        <p>Les ustensils du  ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/5.jpg', ['alt' => 'Image 5', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 5</h3>
                        <p>Artéfact de la période ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/6.jpg', ['alt' => 'Image 6', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 6</h3>
                        <p>Poterie représentant ...</p>
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