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
            <div class="row">
                <div class="col-xs-12">
                    <?= $this->Flash->render() ?>
                </div>
                <div class="col-xs-12">
                    <?= $this->fetch('Breadcrumb'); ?>
                </div>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?= $this->element('footer'); ?>

        <!-- jQuery -->
        <!--<?= $this->Html->script('jquery'); ?>-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Bootstrap Core JavaScript -->
        <?= $this->Html->script('bootstrap.min'); ?>

        <?= $this->Html->script('common'); ?>

        <?= $this->fetch('script') ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPCAdxSiiPDovpbzk4x7vTXwhmzyB_-Ss"></script>
        <script>
            //Change carrosel speed
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })

            function checkMapToDisplay(){
                if(document.getElementById('map_canvas_one')){
                    new google.maps.Map(document.getElementById('map_canvas_one'), {
                        zoom: 4,
                        center: {lat: 2.15055, lng: 13.34027},
                        mapTypeId: 'hybrid'
                    });
                }
                if(document.getElementById('map_canvas_two')){
                    new google.maps.Map(document.getElementById('map_canvas_two'), {
                        zoom: 4,
                        center: {lat: 2.15055, lng: -64.145810 },
                        mapTypeId: 'hybrid'
                    });

                }
            }
            //To fix the navbar when i scroll
            $(document).ready(function() {
                // Control the display of the menu bar when the user scroll
                checkMapToDisplay()
                $(window).scroll(function () {
                    var menu =  $('#menu_bar');
                    var numClass = document.getElementById("menu_bar").dataset.number;
                    if (($(window).scrollTop() > 220) || (numClass == 6)){
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