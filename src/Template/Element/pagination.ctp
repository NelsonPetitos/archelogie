<ul class="pagination">
    <?= $this->Paginator->first('|< '.__('Début')); ?>
    <?= $this->Paginator->prev('< ' . __('Précédent'), []); ?>
    <?= $this->Paginator->numbers(['modulus'=> 4]); ?>
    <?= $this->Paginator->next(__('Suivant') . ' >', []); ?>
    <?= $this->Paginator->last(__('Fin').' >>|'); ?>
</ul>
<p>
    <?= $this->Paginator->counter('Page {{page}} sur {{pages}}, de l\'enregistrement {{start}} à {{end}} pour un total de {{count}}') ?>
</p>