
<?= $this->start('Carousel'); ?>
        <?= $this->element('carousel'); ?>
        <?= $this->end(); ?>

<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 2]); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Partenaires</h1>
            <ol class="breadcrumb">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>">Site</a>
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
                    <dt><a href="http://www.parcsgabon.org/" target="_blank"><?= $this->Html->image('logo-anpn.png', ['alt' => 'Loge ANPN']); ?></a></dt>
                    <dd>
                        Agence Nationale des Parcs Nationaux du Gabon
                        <ul>
                            <li>ANPN</li>
                            <li><a href="http://www.parcsgabon.org/" target="_blank">http://www.parcsgabon.org/</a> </li>
                        </ul>
                    </dd><br/><br/>


                    <dt><a href="http://www.mae.u-paris10.fr/archam/" target="_blank"><?= $this->Html->image('logo-archam.jpg', ['alt' => 'Loge ARCHAM']); ?></a></dt>
                    <dd>
                        UMR ArchAm « Archéologie des Amériques » 
                        <ul>
                            <li>CNRS</li>
                            <li><a href="http://www.mae.u-paris10.fr/archam/" target="_blank"> http://www.mae.u-paris10.fr/archam/</a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.crex-group.org/" target="_blank"><?= $this->Html->image('logo-crex.jpg', ['alt' => 'Loge CREX']); ?></a></dt>
                    <dd>
                        Centre de Recherche et d’Expertise Scientifique au Cameroun 
                        <ul>
                            <li>CREX</li>
                            <li><a href="http://www.crex-group.org/" target="_blank">http://www.crex-group.org/ </a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.paloc.fr" target="_blank"><?= $this->Html->image('logo-ird.jpg', ['alt' => 'Loge IRD']); ?></a></dt>
                    <dd>
                        UMR 208 Paloc « Patrimoines locaux  et Gouvernance »  
                        <ul>
                            <li>IRD</li>
                            <li><a href="http://www.paloc.fr" target="_blank">www.paloc.fr</a> </li>
                        </ul>

                    </dd><br/><br/>


                    <dt><a href="http://www.uy1.uninet.cm/" target="_blank"><?= $this->Html->image('logo-uy1.jpg', ['alt' => 'Loge UY1']); ?></a></dt>
                    <dd>
                        Université de Yaoundé I au Cameroun 
                        <ul>
                            <li>UY1</li>
                            <li><a href="http://www.uy1.uninet.cm/" target="_blank">http://www.uy1.uninet.cm/</a> </li>
                        </ul>

                    </dd><br/><br/>

                    </dd>
                </dl>
            </div>
        <div class="col-md-2" ></div>
    </div>
</div>
</div>
