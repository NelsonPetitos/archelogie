
<?= $this->start('title'); ?>Les partenaires<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
        <?= $this->element('carousel'); ?>
        <?= $this->end(); ?>

<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 2]); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><span class="glyphicon glyphicon-thumbs-up"></span> Partenaires</h3>
            <ol class="breadcrumb">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>"><span class="glyphicon glyphicon-home"></span> Site</a>
                </li>
                <li class="active">Partenaires</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

<div class="contaiber" >
    <div class="row" >
        <div class="col-md-2" ></div>
        <div class="col-md-8" >
            <div class="panel panel-default"><br/><br/>
                <dl class="dl-horizontal">
                    <dt><a href="http://www.parcsgabon.org/" target="_blank"><?= $this->Html->image('logo-anpn.jpg', ['alt' => 'Logo ANPN', 'width' => '170px']); ?></a></dt>
                    <dd>
                        Agence Nationale des Parcs Nationaux du Gabon
                        <ul>
                            <li>ANPN</li>
                            <li><a href="http://www.parcsgabon.org/" target="_blank">http://www.parcsgabon.org/</a> </li>
                        </ul>
                    </dd><br/><br/>


                    <dt><a href="http://www.crex-group.org/" target="_blank"><?= $this->Html->image('logo-crex.jpg', ['alt' => 'Logo CREX', 'width' => '150px']); ?></a></dt>
                    <dd>
                        Centre de Recherche et d’Expertise Scientifique au Cameroun 
                        <ul>
                            <li>CREX</li>
                            <li><a href="http://www.crex-group.org/" target="_blank">http://www.crex-group.org/ </a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.paloc.fr" target="_blank"><?= $this->Html->image('logo-ird.png', ['alt' => 'Logo IRD', 'width' => '150px']); ?></a></dt>
                    <dd>
                        UMR 208 Paloc « Patrimoines locaux  et Gouvernance »  
                        <ul>
                            <li>IRD</li>
                            <li><a href="http://www.paloc.fr" target="_blank">www.paloc.fr</a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.uy1.uninet.cm/" target="_blank"><?= $this->Html->image('logo-uy1.jpg', ['alt' => 'Logo UY1', 'width' => '150px']); ?></a></dt>
                    <dd>
                        Université de Yaoundé I au Cameroun 
                        <ul>
                            <li>UY1</li>
                            <li><a href="http://www.uy1.uninet.cm/" target="_blank">http://www.uy1.uninet.cm/</a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.geo.uni-potsdam.de/" target="_blank"><?= $this->Html->image('logo-iees.jpg', ['alt' => 'Logo Université de Potsdam', 'width' => '150px']); ?></a></dt>
                    <dd>
                        Institute of Earth and Environmental Science
                        <ul>
                            <li>Université de Potsdam</li>
                            <li><a href="http://www.geo.uni-potsdam.de/" target="_blank">http://www.geo.uni-potsdam.de/</a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.mae.u-paris10.fr/archam/" target="_blank"><?= $this->Html->image('logo-archam.png', ['alt' => 'Logo ARCHAM', 'width' => '150px']); ?></a></dt>
                    <dd>
                        UMR ArchAm « Archéologie des Amériques » 
                        <ul>
                            <li>CNRS</li>
                            <li><a href="http://www.mae.u-paris10.fr/archam/" target="_blank"> http://www.mae.u-paris10.fr/archam/</a> </li>
                        </ul>

                    </dd>

                </dl>
            </div>
        <div class="col-md-2" ></div>
    </div>
</div>

