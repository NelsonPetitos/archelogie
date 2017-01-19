
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
            <ul class="dropdown__menu__list dropdown__double">
                <!--<li><a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>"></a></li>-->
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Objectifs</a></li>
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Lieux d'étude</a></li>
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Projets en cours</a></li>
            </ul>
        </li>
        <li
            <?php if($activeClass == 4): ?>
            class="menu__active"
            <?php endif; ?>
        >
            <a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">L'actualité</a>
            <ul class="dropdown__menu__list dropdown__simple__plus">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Les évènements</a></li>
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Les publications</a></li>
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
                    <a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Le bassin amazonien</a>
                    <!--<?= Cake\Routing\Router::url(['_name' => 'amazoniehome' ]); ?>-->
                </li>
            </ul>
        </li>
        <li
            <?php if($activeClass == 2): ?>
                class="menu__active"
            <?php endif; ?>
        >
            <a href="<?= Cake\Routing\Router::url(['_name' => 'partenaires']); ?>">Partenariats</a>
            <ul class="dropdown__menu__list dropdown__simple__plus">
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'partenaires']); ?>">Nos partenaires</a></li>
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Devenez partenaire</a></li>
                <li><a href="<?= Cake\Routing\Router::url(['_name' => 'sorry']); ?>">Autre collaboration</a></li>
            </ul>
            <!--<ul class="dropdown__menu__list dropdown__menu__list__img">-->
                <!--<li><a href="http://www.parcsgabon.org/" target="_blank"><?= $this->Html->image('logo-anpn.png', ['alt' => 'Loge ANPN', 'class' => 'logo__menu']); ?> ANPN</a></li>-->
                <!--<li><a href="http://www.mae.u-paris10.fr/archam/" target="_blank"><?= $this->Html->image('logo-archam.jpg', ['alt' => 'Loge ARCHAN', 'class' => 'logo__menu']); ?> ARCHAM</a></li>-->
                <!--<li><a href="http://www.crex-group.org/" target="_blank"><?= $this->Html->image('logo-crex.jpg', ['alt' => 'Loge CREX', 'class' => 'logo__menu']); ?> CREX</a></li>-->
                <!--<li><a href="http://www.paloc.fr" target="_blank"><?= $this->Html->image('logo-ird.jpg', ['alt' => 'Loge IRD', 'class' => 'logo__menu']); ?>IRD-UMR208</a></li>-->
                <!--<li><a href="http://www.uy1.uninet.cm/" target="_blank"><?= $this->Html->image('logo-uy1.jpg', ['alt' => 'Loge UY1', 'class' => 'logo__menu']); ?> UY1</a></li>-->
            <!--</ul>-->
        </li>
        <!--<li-->
            <!--<?php if($activeClass == 3): ?>-->
                <!--class="menu__active"-->
            <!--<?php endif; ?>-->
        <!--&gt;-->
            <!--<a href="<?= Cake\Routing\Router::url(['_name' => 'liens']); ?>">Liens</a>-->
        <!--</li>-->
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