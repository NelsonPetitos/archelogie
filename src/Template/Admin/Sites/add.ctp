<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Enrégistrer un objet</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($site) ?>
                    <?php
                        echo $this->Form->input('name');
                        echo $this->Form->input('type');
                        echo $this->Form->input('latitude');
                        echo $this->Form->input('longitude');
                        echo $this->Form->input('contry');
                        echo $this->Form->input('province');
                        echo $this->Form->input('datation_count');
                        echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true]);
                    ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>
</section>