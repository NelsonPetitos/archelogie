
<!--</nav>-->
<div id="menu_bar" data-number=<?php echo $activeClass; ?>
    <?php if(($activeClass != 6) && ($activeClass != 5)): ?>
        class="menu__floating"
    <?php else: ?>
        class="menu__fixed"
    <?php endif; ?>
>
    <ul class="menu__list">
        <li
            <?php if($activeClass == 1): ?>
                class="menu__active"
            <?php endif; ?>
        >
            <a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>">Accueil</a>
        </li>
        <li
            <?php if($activeClass == 4): ?>
            class="menu__active"
            <?php endif; ?>
        >
            <a href="<?= Cake\Routing\Router::url(['_name' => 'actualites_evenements']); ?>">L'actualité</a>
            <ul class="dropdown__menu__list dropdown__simple__plus">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'actualites_evenements']); ?>">Les évènements</a></li>
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'actualites_publications']); ?>">Les publications</a></li>
            </ul>
        </li>

        <li
            <?php if($activeClass == 5): ?>
            class="menu__active"
            <?php endif; ?>
        >
            <a href="<?= Cake\Routing\Router::url(['_name' => 'afriquehome']); ?>">Les zones géographiques</a>
            <ul class="dropdown__menu__list dropdown__simple">
                <li>
                    <a href="<?= Cake\Routing\Router::url(['_name' => 'afriquehome']); ?>">L'Afrique Centrale</a>
                </li>
                <li>
                    <a href="<?= Cake\Routing\Router::url(['_name' => 'amazoniehome']); ?>">Le bassin amazonien</a>
                </li>
            </ul>
        </li>
        <li
            <?php if($activeClass == 2): ?>
                class="menu__active"
            <?php endif; ?>
        >
            <a href="<?= Cake\Routing\Router::url(['_name' => 'partenaires']); ?>">Partenariats</a>
        </li>
        <li
            <?php if($activeClass == 6): ?>
                class="menu__active"
            <?php endif; ?>
        >
        <?php if(is_null($this->request->session()->read('Auth.User.email'))):?>
            <a href="#">Administrer la base</a>
            <ul class="dropdown__menu__list dropdown__simple">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'login']) ?>" >Se connecter</a></li>
            </ul>
        <?php else: ?>
            <?php $currentUser = $this->request->session()->read('Auth.User'); ?>
            <?php if($currentUser['role_id'] == 1): ?>
                <a href="#">Actions <b class="caret"></b></a>
                <ul class="dropdown__menu__list dropdown__simple__plus">
                    <li>
                        <?= $this->Html->link('Administration', ['controller' => 'Default', 'action' => 'home', 'prefix' => 'admin']); ?>
                    </li>
                    <li>
                        <a href="<?= Cake\Routing\Router::url(['_name' => 'logout']) ?>">Déconnection</a>
                    </li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
        </li>
    </ul>
</div>

<div class="flyer_container" id="flyer_container">
    <button id="acheo_flyer_button">
        <span class="glyphicon glyphicon-triangle-left"></span>
    </button>
    <h4>Pour citer cette base de données </h4>
    <dl>
        <dt>Base de données Afrique : <br/></dt>
        <dd>SAULIEU G. de, OSLISLY R., NLEND P., GARCIN Y. (Authors), CHEVILLOTTE H. & NDE KUETE N. (Software) [2017]. Plateforme des datations archéologiques d'Afrique Centrale.
            Version 2.0, [31/03/2017]. [http://vmtropicar-proto.ird.fr/archeologie/afrique]<br/><br/></dd>
        <dt>Base de données Amazonie : <br/></dt>
        <dd>SAULIEU G. de, ROSTAIN S., (Authors), CHEVILLOTTE H. & NDE KUETE N. (Software) [2017]. Plateforme des datations archéologiques d'Amazonie.
            Version 2.0, [31/03/2017]. [http://vmtropicar-proto.ird.fr/archeologie/amazonie]</dd>
    </dl>
</div>




