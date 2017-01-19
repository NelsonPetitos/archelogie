<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 3]); ?>
<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
    <?= $this->element('carousel'); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Liens</h1>
            <ol class="breadcrumb">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>">Site</a>
                </li>
                <li class="active">Liens</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

