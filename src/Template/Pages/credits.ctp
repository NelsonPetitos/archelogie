<?= $this->start('title'); ?>Crédits<?= $this->end(); ?>

<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 4]); ?>
<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
    <?= $this->element('carousel'); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Crédits</h1>
            <ol class="breadcrumb">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>">Site</a>
                </li>
                <li class="active">Crédits</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

<div class="container-fluid col-md-offset-1" >
    <p >
        <h3>Conception et réalisation informatique </h3>
        <ul>
            <li>Hervé Chevillotte (IRD)</li>
            <p>Couriel : herve.chevillotte@ird.fr</p>

            <li>Nelson Kuete Petitos (WeareTechSARL)</li>
            <p>Couriel : nde_nelson@yaho.fr</p>
        </ul>

        <h3>Conception scientifique </h3>
        <ul>
            <li>Hervé Chevillotte (IRD)</li>
            <li>Geoffroy de Saulieu (IRD), en collaboration avec Richard Oslisly (AgenceNationaleParcsNationaux – Gabon) pour l’Afrique Centrale, et Stéphen Rostain(CNRS) pour l’Amazonie.</li>
        </ul><br/>
        <h3>Responsable du site  <small></small></h3>
        <span>Geoffroy de Saulieu</span>
        <h3>Assistance technique </h3>
        Open IT « Lien internet »
        <h3>Hébergeur</h3>
        <h3>Fonctionnement du site</h3>
        <h3>Conditions d'utilisation</h3>
        <h3>Cookies</h3>
        <h3>Limitation de responsabilité</h3>

    </p>
</div>