<section class="content">
    <?= $this->Form->create($auteur) ?>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edition auteur</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-9">
                    <?= $this->Form->input('name'); ?>
                </div>
                <div class="col-md-3" style="padding-top: 26px;">
                    <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $auteur->id], [ 'class' => 'btn btn-danger', 'confirm' => __('Voulez vous supprimer {0}?', $auteur->name), 'escape' => false, 'block' => 'deleteform']) ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>