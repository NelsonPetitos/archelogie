<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Enrégistrer un site</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($site) ?>
                    <?php
                        echo $this->Form->input('name', ['escape' => false, 'label' => 'Nom du site']);
                        echo $this->Form->input('type', ['escape' => false, 'label' => 'Type de site']);
                        echo $this->Form->input('latitude', ['escape' => false, 'label' => 'Latitude']);
                        echo $this->Form->input('longitude', ['escape' => false, 'label' => 'Longitude']);
                        echo $this->Form->input('contry', ['escape' => false, 'label' => 'Pays']);
                        echo $this->Form->input('province', ['escape' => false, 'label' => 'Province']);
                        echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true, 'label' => 'Distribution géographique']);
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