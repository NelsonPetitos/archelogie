<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edition publication</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($publication) ?>
                    <?php
                        echo $this->Form->input('title', ['label' => 'Titre de la publication']);
                        echo $this->Form->input('reference', ['label' => 'Reférence bibliographique']);
                        echo $this->Form->input('annee', ['label' => 'Année de publication']);
                        echo $this->Form->input('source_id', ['label' => 'Source des données', 'options' => $sources, 'empty' => true]);

                    ?>
                    <label>Auteur(s)</label>
                    <?php echo $this->Form->select('auteurs._ids', $auteurs, ['multiple' => true, 'class' => 'auteur-select-list']);?>

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

