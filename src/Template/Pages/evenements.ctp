<?= $this->start('title'); ?>Actualité évènementiel<?= $this->end(); ?>
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
                <li>Évènements à venir</li>
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
    <div class="row">
        <div class="col-md-12">
            <h3>Message de l’archéologue Dr. Carla Jaimes Betancourt</h3><hr/>
            <div class="archeo_card">
                <?= $this->Html->image('carla_jaimes.jpeg', ['alt' => 'Profile']); ?>
                <p>
                    Département d'anthropologie des Amériques<br/>
                    Oxfordstr. 15<br/>
                    53111 Bonn<br/><br/>
                    Raum 2.012<br/><br/>
                    Tel.: +49 (0)228 – 734 384<br/>
                    Fax: +49 (0)228 – 734 385<br/><br/>
                    E-Mail: cjaimes@uni-bonn.de<br/><br/>
                    Sprechstunde: Mittwoch von 14 - 16 Uhr (nach vorheriger Vereinbarung)
                </p>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row" style="font-family: Arial; font-size: 14px; line-height: 1.8em; text-align: justify;">
        <div class="col-md-4">
            <p>
                Chers collègues,<br/>
                Voici le lien de la page web du VIème symposium international d’archéologie amazonienne.
                N’hésitez pas à partager ce lien sur les réseaux sociaux.
                Par avance merci et nous espérons vous voir à Trinidad (Bolivie) en octobre prochain.
            </p>
            <span style="position: relative; left: 75%; top: 10%;"><a href="http://www.4eiaa.com" target="_blank">Détails...</a> </span>
        </div>
        <div class="col-md-4">
            <p>
                Estimados Colegas,<br/>
                Este es el link de la página web del IV Encuentro Internacional de Arqueologia Amazónica. Por favor les pido que puedan socializarla a través de sus blogs, páginas webs, etc.
                Gracias y espero que nos veamos en Trinidad en octubre.
            </p>
            <span style="position: relative; left: 75%; top: 10%;"><a href="http://www.4eiaa.com" target="_blank">Detalles...</a> </span>
        </div>
        <div class="col-md-4">
            <p>
                Dear colleagues,<br/>
                This is the link of the website of the IV International Meeting of Amazonian Archeology.
                I would appreciate if you could socialize it through your blogs, web pages, etc.
                Thank you and I hope to see you in Trinidad in October.
            </p>
            <span style="position: relative; left: 75%; top: 10%;"><a href="http://www.4eiaa.com" target="_blank">Details...</a> </span>
        </div>
    </div>

</div>