<div id="MyCarossel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#MyCarossel" data-slide-to="0" class="active"></li>
        <li data-target="#MyCarossel" data-slide-to="1"></li>
        <li data-target="#MyCarossel" data-slide-to="2"></li>
        <li data-target="#MyCarossel" data-slide-to="3"></li>
        <li data-target="#MyCarossel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <?= $this->Html->image('slideone.jpg', ['alt' => 'Slide one', 'class' => 'slider__img']); ?>
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <?= $this->Html->image('slidetwo.jpg', ['alt' => 'Slide two', 'class' => 'slider__img']); ?>
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <?= $this->Html->image('slidethree.jpg', ['alt' => 'Slide three', 'class' => 'slider__img']); ?>
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <?= $this->Html->image('slidefour.jpg', ['alt' => 'Slide four', 'class' => 'slider__img']); ?>
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <?= $this->Html->image('slidefive.jpg', ['alt' => 'Slide five', 'class' => 'slider__img']); ?>
            <div class="carousel-caption">
                ...
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#MyCarossel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#MyCarossel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>