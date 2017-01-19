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
                        echo $this->Form->input('annee', ['label' => 'Année de publication']);
                        echo $this->Form->input('title', ['label' => 'Titre de la publication']);
                        echo $this->Form->input('reference', ['label' => 'Reférence bibliographique']);
                        echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true]);
                        echo $this->Form->select('auteurs._ids', $auteurs, ['multiple' => 'checkbox']);
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
            ['action' => 'delete', $publication->id],
            ['class' => 'btn btn-danger', 'confirm' => __('Supprimer publication ?')]
            )
            ?>
        </div>
    </div>
</section>
