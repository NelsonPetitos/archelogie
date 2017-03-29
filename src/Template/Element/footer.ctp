<!-- Footer -->
<div class="site__footer">
    <div class="footer__content">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <ul class="footer__list">
                    <h3>Accueil</h3>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>">Présentation</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="footer__list">
                    <h3>L'actualité</h3>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'actualites_evenements']); ?>">Les évènements</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'actualites_publications']); ?>">Les publications</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="footer__list">
                    <h3>Les zones géographiques</h3>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'afriquehome']); ?>">L'Afrique Centrale</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Le bassin amazonien</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer__list">
                    <h3>Partenariats</h3>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'partenaires']); ?>">Nos partenaires</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'partenaires']); ?>">Denenez partenaire</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'partenaires']); ?>">Autre collaboration</a></li>
                </ul>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <ul class="footer__details">
                    <li class="footer__details__first"><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;Plan du site</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'liens']); ?>"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;&nbsp;&nbsp;Liens</a></li>
                    <li><a href="http://www.ird.fr/infos-pratiques/mentions-legales"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;Mentions légales</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'contacts']) ;?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;Contacts</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;&nbsp;Crédits</a></li>
                </ul>
            </div>
            <div class="col-md-2 site__trademark">
                <span class="glyphicon glyphicon-copyright-mark"></span> Archéologie 2016.
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>