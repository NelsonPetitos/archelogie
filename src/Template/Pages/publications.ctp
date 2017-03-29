<?= $this->start('title'); ?>Actualité des publications<?= $this->end(); ?>

<?= $this->start('Navigation'); ?>
<?= $this->element('navigation', ['activeClass' => 4]); ?>
<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
<?= $this->element('carousel'); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><span class="glyphicon glyphicon-calendar"></span> Actualités</h3>
            <ol class="breadcrumb">
                <li><a class="text-center" href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>"><span class="glyphicon glyphicon-home"></span> Site</a></li>
                <li>Actualités sur les publications</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <form class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                        <input type="text" class="form-control" id="searchtext" placeholder="Recherche" />
                    </div>
                    <button type="submit" class="btn btn-primary" disabled="disabled">Lancer</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row" >
        <div class="col-md-12">
            <h4 style="margin-bottom: 30px;"><span class="glyphicon glyphicon-cloud" style="color: dodgerblue"></span> &nbsp; Mise en ligne de la chaine Youtube <a href="https://www.youtube.com/watch?v=RKn5GEdZzDo&list=PLK4tut96SY0PTz9FaPIwmGFqkHvWhIQh2" target="_blank">Patrimoines en Afrique Centrale</a></h4>
            <hr/>
            <iframe width="420" height="360" src="https://www.youtube.com/embed/RKn5GEdZzDo?list=PLK4tut96SY0PTz9FaPIwmGFqkHvWhIQh2" frameborder="0" allowfullscreen style="position: relative; left: 10%;"></iframe>
        </div>
    </div>
</div>
