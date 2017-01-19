<div class="my__pagination">
    <ul class="pagination">
        <?= $this->Paginator->first('|< '.__('Début')); ?>
        <?= $this->Paginator->prev('< ' . __('Précédent'), []); ?>
        <?= $this->Paginator->numbers(['modulus'=> 6]); ?>
        <?= $this->Paginator->next(__('Suivant') . ' >', []); ?>
        <?= $this->Paginator->last(__('Fin').' >>|'); ?>
    </ul>
    <!--<p><?= $this->Paginator->counter() ?></p>-->
</div>