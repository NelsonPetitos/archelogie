<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edition auteur</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($auteur) ?>
                    <?php
                        echo $this->Form->input('name');
                        echo $this->Form->select('publications._ids', $publications, ['multiple' => 'checkbox']);
                    ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->postLink(
            __('Supprimer'),
            ['action' => 'delete', $auteur->id],
            ['class' => 'btn btn-danger', 'confirm' => __('Supprimer auteur {0} ?', $auteur->name)]
            )
            ?>
        </div>
    </div>
</section>