
<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => 5]); ?>
        <?= $this->end(); ?>

<?= $this->start('Breadcrumb'); ?>
    <li>Accueil</li>
<?= $this->end(); ?>

<div class="row">
    <div class="col-xs-12">
        <p class="text-justify">
            Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra modum, quam Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam mortalis, inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui paulatim eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes, adfectati regni vel artium nefandarum calumnias insontibus adfligeban
        </p>
    </div>
</div>
<div class="row" >
    <div class="col-xs-7">
        <p class="text-justify">
            Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.<br />
        </p>
        <p class="text-justify">
            Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.<br /><br />
        </p>
        <p class="text-justify">
            Saraceni tamen nec amici nobis umquam nec hostes optandi, ultro citroque discursantes quicquid inveniri poterat momento temporis parvi vastabant milvorum rapacium similes, qui si praedam dispexerint celsius, volatu rapiunt celeri, aut nisi impetraverint, non inmorantur.<br /><br />
        </p>
    </div>
    <div class="col-xs-5">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php echo $this->Html->image('amazonie/1.jpg', ['alt' => 'Image 1', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 1</h3>
                        <p>Les outils des peuples...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/2.jpg', ['alt' => 'Image 2', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 2</h3>
                        <p>Poterie du moyen ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/3.jpg', ['alt' => 'Image 3', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 3</h3>
                        <p>Vestige de la civilisation ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/4.jpg', ['alt' => 'Image 4', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 4</h3>
                        <p>Les ustensils du  ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/5.jpg', ['alt' => 'Image 5', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 5</h3>
                        <p>Artéfact de la période ...</p>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('amazonie/6.jpg', ['alt' => 'Image 6', 'class' => 'center_img']); ?>
                    <div class="carousel-caption">
                        <h3>Picture 6</h3>
                        <p>Poterie représentant ...</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>
</div>