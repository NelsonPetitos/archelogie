<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edition laboratoire</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($laboratoire) ?>
                    <?php
                        echo $this->Form->input('code_laboratoire');
                        echo $this->Form->input('description');
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
            ['action' => 'delete', $laboratoire->id],
            ['class' => 'btn btn-danger', 'confirm' => __('Supprimer laboratoire {0} ?', $laboratoire->code_laboratoire)]
            )
            ?>
        </div>
    </div>
</section>