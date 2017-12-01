<!DOCTYPE html>
<html lang="fr">
    <head>
        <?= $this->Html->charset() ?>
        <title><?= $this->fetch('title') ?></title>
        <!--<?= $this->Html->meta('icon') ?>-->
        <?= $this->fetch('meta') ?>

        <?= $this->Html->css('bootstrap') ?>
        <?= $this->Html->css('archeologie'); ?>
        <?= $this->Html->css('jquery-ui'); ?>
        <?= $this->Html->css('jquery-ui-slider-pips'); ?>
        <!--<?= $this->Html->css('modern'); ?>-->
        <?= $this->fetch('css') ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPCAdxSiiPDovpbzk4x7vTXwhmzyB_-Ss"></script>

    </head>

    <body>

        <?= $this->element('navigation',['activeClass' => 5]); ?>

        <!-- Page Content -->
        <div class="container">
            <!--Display the loader of the page-->
            <div class="wrap_loader" id="archeologie_loader">
                <div class="loading">
                    <div class="bounceball"></div>
                    <div class="text">Chargement ...</div>
                </div>
            </div>

            <!-- Ajouter les messages flash-->
            <?= $this->Flash->render() ?>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Plateforme des datations archéologiques d'Afrique Centrale</h3>
                    <ol class="breadcrumb">
                        <li>
                            <?= $this->Html->link('<span class="glyphicon glyphicon-home"></span> Afrique Centrale', '/afrique', ['escape' => false]); ?>
                        </li>
                        <?= $this->fetch('Breadcrumb'); ?>
                    </ol>
                </div>
            </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <?php if (isset($accueil)): ?>
                            <?= $this->Html->link('Accueil Afrique', '/afrique', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Accueil Afrique', '/afrique', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($cartographie)): ?>
                        <?= $this->Html->link('Cartographie', '/afrique/datations/cartographie', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Cartographie', '/afrique/datations/cartographie', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($activedatation)): ?>
                        <?= $this->Html->link('Datations', '/afrique/datations', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Datations', '/afrique/datations', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($activepublication)): ?>
                        <?= $this->Html->link('Publications', '/afrique/publications', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Publications', '/afrique/publications', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($activesite)): ?>
                        <?= $this->Html->link('Sites archéologiques', '/afrique/sites', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Sites archéologiques', '/afrique/sites', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-md-10">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?= $this->element('footer'); ?>

        <!-- jQuery -->
        <?= $this->Html->script('jquery'); ?>
        <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->
        <!--<?= $this->Html->script("http://maps.google.com/maps/api/js?key=AIzaSyBPCAdxSiiPDovpbzk4x7vTXwhmzyB_-Ss"); ?>-->
        <?= $this->Html->script('jquery-ui'); ?>
        <?= $this->Html->script('jquery-ui-slider-pips'); ?>
        <?= $this->Html->script('archeologie'); ?>
        <?= $this->Html->script('common'); ?>

        <!-- Bootstrap Core JavaScript -->
        <?= $this->Html->script('bootstrap.min'); ?>

        <?= $this->fetch('script') ?>
    </body>

</html>