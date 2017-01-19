<!-- Footer -->
<div class="site__footer">
    <div class="footer__content">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <ul class="footer__list">
                    <h3>Accueil</h3>
                    <li><a href="#">Présentation</a></li>
                    <li><a href="#">Les objectifs</a></li>
                    <li><a href="#">Les lieux d'études</a></li>
                    <li><a href="#">Les résultats</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="footer__list">
                    <h3>L'actualité</h3>
                    <li><a href="#">Les évènements</a></li>
                    <li><a href="#">Les publications</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="footer__list">
                    <h3>Les zones géographiques</h3>
                    <li><a href="#">L'Afrique Centrale</a></li>
                    <li><a href="#">Le bassin amazonien</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer__list">
                    <h3>Partenariats</h3>
                    <li><a href="#">Nos partenaires</a></li>
                    <li><a href="#">Denenez partenaire</a></li>
                    <li><a href="#">Autre collaboration</a></li>
                </ul>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <ul class="footer__details">
                    <li class="footer__details__first"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;Plan du site</a></li>
                    <li><a href="<?= Cake\Routing\Router::url(['_name' => 'liens']); ?>"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;&nbsp;&nbsp;Liens</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;Mentions légales</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;Contacts</a></li>
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

<!--<div class="modal__element" id="modal__element">-->
    <!--<div class="modal__content" style="padding: 30px;">-->
        <!--<span class="modal__close"><a href="#" onclick="event.preventDefault(); document.getElementById('modal__element').style.display = 'none'; " >X</a></span>-->
        <!--<?= $this->Flash->render('auth') ?>-->
        <!--<?= $this->Form->create() ?>-->
        <!--<?= $this->Form->input('email', ['label' => 'Email']) ?>-->
        <!--<?= $this->Form->input('password', ['label' => 'Mot de passe']) ?>-->
        <!--<?= $this->Form->submit(__('Se connecter')); ?>-->

        <!--<?= $this->Form->end() ?>-->
        <!--<div class="text-right">-->
            <!--<a href="#" onclick="event.preventDefault(); document.getElementById('modal__element').style.display = 'none';">Vous n'avez pas de compte ?</a>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->