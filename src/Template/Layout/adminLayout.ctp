<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <?= $this->Html->css('bootstrap'); ?>
        <?= $this->Html->css('adminlte'); ?>
        <?= $this->Html->css('skinblue'); ?>
        <?= $this->Html->css('loader'); ?>
        <?= $this->Html->css('select2'); ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPCAdxSiiPDovpbzk4x7vTXwhmzyB_-Ss"></script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= Cake\Routing\Router::url(['_name' => 'accueil']); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>dmin</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Archéologie</b></span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-align-justify"></span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <?= $this->Html->image('avatar.png', ['alt' => 'logo admin', 'class' => 'user-image']); ?>
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Admin name</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <?= $this->Html->image('avatar.png', ['alt' => 'image', 'class' => 'img-circle']); ?>
                                        <p>Bla bla ...<small>Peut etre une adressse</small></p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?= Cake\Routing\Router::url(['_name' => 'logout']); ?>" class="btn btn-default btn-flat">Déconnection</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <div class="user-panel">

                </div>
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">MENU</li>
                    <!-- Optionally, you can add icons to the links -->

                    <li >
                        <a href="<?= Cake\Routing\Router::url(['controller' => 'Auteurs', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-user"></i> <span>Auteurs</span></a>
                    </li>
                    <li>
                        <a href="<?= Cake\Routing\Router::url(['controller' => 'Datations', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-calendar  "></i> <span>Datations</span></a>
                    </li>
                    <li>
                        <a href="<?= Cake\Routing\Router::url(['controller' => 'Laboratoires', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-home"></i> <span>Laboratoires</span></a>
                    </li>
                    <li>
                        <a href="<?= Cake\Routing\Router::url(['controller' => 'Objets', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-leaf"></i> <span>Matériels / objets</span></a>
                    </li>
                    <li>
                        <a href="<?= Cake\Routing\Router::url(['controller' => 'Sites', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-map-marker"></i> <span>Sites</span></a>
                    </li>
                    <li>
                        <a href="<?= Cake\Routing\Router::url(['controller' => 'Publications', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-book"></i> <span>Publications</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i> <span>Autres</span>
                            <span class="pull-right-container"><i class="glyphicon glyphicon-chevron-left"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= Cake\Routing\Router::url(['controller' => 'Roles', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-record"></i>Rôles</a></li>
                            <li><a href="<?= Cake\Routing\Router::url(['controller' => 'Users', 'action' => 'index', 'prefix' => 'admin']); ?>"><i class="glyphicon glyphicon-record"></i>Utilisateurs</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!--Display the loader on the page-->
                <div class="wrap_loader" id="archeologie_loader">
                    <div class="">
                        <div class="bounceball"></div>
                        <div class="text_loader">Chargement...</div>
                    </div>
                </div>

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <!--<?= $this->Flash->render() ?>-->
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->
                    <?= $this->fetch('content'); ?>

                </section>
                <!-- /.content -->
            </div>
            <footer class="main-footer">
                <strong>Copyright &copy;  2016 <a href="#">archéologie</a>.</strong> All rights reserved.
            </footer>
            <?= $this->fetch('deleteform'); ?>
            <div class="control-sidebar-bg"></div>
        </div>

        <?= $this->Html->script('jquery'); ?>
        <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->
        <!--<?= $this->Html->script("http://maps.google.com/maps/api/js?key=AIzaSyBPCAdxSiiPDovpbzk4x7vTXwhmzyB_-Ss"); ?>-->
        <?= $this->Html->script('jquery.livequery.min'); ?>
        <?= $this->Html->script('bootstrap.min'); ?>
        <?= $this->Html->script('create_datation'); ?>
        <?= $this->Html->script('archeologie'); ?>
        <?= $this->Html->script('app'); ?>
        <?= $this->Html->script('select2.min'); ?>
    </body>
</html>