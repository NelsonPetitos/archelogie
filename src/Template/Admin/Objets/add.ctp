<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Enrégistrer un objet</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($objet) ?>
                    <?php
                        echo $this->Form->input('name');
                        echo $this->Form->input('categorie');
                    ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>



