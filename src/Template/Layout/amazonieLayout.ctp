<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>

        <?= $this->Html->css('bootstrap') ?>
        <?= $this->Html->css('archeologie'); ?>
        <?= $this->Html->css('modern'); ?>
        <?= $this->fetch('css') ?>

    </head>

    <body>
        <?= $this->fetch('Navigation'); ?>

        <?= $this->fetch('Carousel'); ?>

        <!-- Page Content -->
        <div class="container">
            <!-- Ajouter les messages flash-->
            <?= $this->Flash->render() ?>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Plateforme des datations archéologiques d'Amazonie </h2>
                    <ol class="breadcrumb">
                        <li><?= $this->Html->link('Bassin amazonien', '/amazonie', []); ?></li>
                        <?= $this->fetch('Breadcrumb'); ?>
                    </ol>
                </div>
            </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <?php if (isset($accueil)): ?>
                        <?= $this->Html->link('Accueil Amazonie', '/amazonie', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Accueil Amazonie', '/amazonie', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($cartographie)): ?>
                        <?= $this->Html->link('Cartographie', '#', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Cartographie', '#', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($datations)): ?>
                        <?= $this->Html->link('Datations', '/amazonie/datations', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Datations', '/amazonie/datations', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($publications)): ?>
                        <?= $this->Html->link('Publications', '/amazonie/publications', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Publications', '/amazonie/publications', ['class' => 'list-group-item' ]); ?>
                        <?php endif; ?>

                        <?php if (isset($sites)): ?>
                        <?= $this->Html->link('Sites archéologiques', '/amazonie/sites', ['class' => 'list-group-item active' ]); ?>
                        <?php else: ?>
                        <?= $this->Html->link('Sites archéologiques', '/amazonie/sites', ['class' => 'list-group-item' ]); ?>
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

        <!-- Bootstrap Core JavaScript -->
        <?= $this->Html->script('bootstrap.min'); ?>
        <?= $this->Html->script('archeologie'); ?>
        <?= $this->fetch('script') ?>

    </body>

</html>