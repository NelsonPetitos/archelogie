<?= $this->start('Navigation'); ?>
        <?= $this->element('navigation',['activeClass' => 5]); ?>
        <?= $this->end(); ?>

        <?= $this->start('Breadcrumb'); ?>
<li>Datations</li>
        <?= $this->end(); ?>


<div class="">
<table class="table table-responsive">

</table>
<div class="paginator">
    <ul class="pager">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <!--<p><?= $this->Paginator->counter() ?></p>-->
</div>
</div>
