<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Enrégistrer une datation</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($datation) ?>
                    <?php
                        echo $this->Form->input('type_datation');
                        echo $this->Form->input('code_reference');
                        echo $this->Form->input('date_bp');
                        echo $this->Form->input('annee_prise_echantillon');
                        echo $this->Form->input('discipline');
                        echo $this->Form->input('laboratoire_id', ['options' => $laboratoires, 'empty' => true]);
                        echo $this->Form->input('site_id', ['options' => $sites, 'empty' => true]);
                        echo $this->Form->input('detail_site_recolte');
                        echo $this->Form->input('erreur_standard');
                        echo $this->Form->input('culture_associee');
                        echo $this->Form->input('horizon_culturel');
                        echo $this->Form->input('numero_structure');
                        echo $this->Form->input('date_calibree');
                        echo $this->Form->input('commentaire');
                        echo $this->Form->input('source_id', ['options' => $sources]);
                        echo $this->Form->input('materiels._ids', ['options' => $materiels]);
                        echo $this->Form->input('objets._ids', ['options' => $objets]);
                        echo $this->Form->input('publications._ids', ['options' => $publications]);
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