<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>

        <?= $this->Html->css('bootstrap') ?>
        <!--<?= $this->Html->css('modern'); ?>-->
        <?= $this->Html->css('archeologie'); ?>
        <?= $this->fetch('css') ?>

    </head>

    <body>
        <?= $this->fetch('Navigation'); ?>

        <?= $this->fetch('Carousel'); ?>

        <!-- Page Content -->
        <div class="container">
            <!-- Ajouter les messages flash-->
            <?= $this->Flash->render() ?>

            <?= $this->fetch('Breadcrumb'); ?>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
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

        <?= $this->Html->script('common'); ?>

        <?= $this->fetch('script') ?>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })

            //To fix the navbar when i scroll
            $(document).ready(function() {
//                console.log("toto");
                $(window).scroll(function () {
//                    console.log($(window).scrollTop())
                    menu =  $('#menu_bar');
                    var numClass = document.getElementById("menu_bar").dataset.number;
//                    console.log(numClass);
                    if (($(window).scrollTop() > 320) || (numClass == 6)){
                        menu.removeClass('menu__floating');
                        menu.addClass('menu__fixed');
                    }else{
                        menu.removeClass('menu__fixed');
                        menu.addClass('menu__floating');
                    }

                });
            });
        </script>
    </body>

</html>