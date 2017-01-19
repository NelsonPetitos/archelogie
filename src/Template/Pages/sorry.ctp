<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 3]); ?>
<?= $this->end(); ?>

<?= $this->start('Carousel'); ?>
    <?= $this->element('carousel'); ?>
<?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Oooops</h1>
            <ol class="breadcrumb">
                <li>Maintenance</li>
            </ol>
        </div>
    </div>
<?= $this->end(); ?>

<div class="row" >
    <div class="col-md-12">
        <?= $this->Html->image('sorry.jpg', ['alt' => 'Sorry image']); ?>
        <span style="font-size: 32px; font-family: 'Comic Sans MS', Arial, Helvetica, sans-serif">
            Désolés lien en cours de maintenance.<a  href="#" onclick="event.preventDefault(); history.back();" > Précédent</a>
        </span>

    </div>
</div>
<script>
    function back(event){
        console.log("je suis ici");
//        event.preventDefaulf();
        history.back();
    }
</script>

