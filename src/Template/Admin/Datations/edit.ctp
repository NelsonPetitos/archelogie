<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Details de la datation</a></li>
                <li><a href="#tab_2" data-toggle="tab">Laboratoire d'analyse</a></li>
                <li><a href="#tab_3" data-toggle="tab">Site de récolte</a></li>
                <li><a href="#tab_4" data-toggle="tab">Materiels daté</a></li>
                <li><a href="#tab_5" data-toggle="tab">Objets associés</a></li>
                <li><a href="#tab_6" data-toggle="tab">Publications</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-md-9">
                            <?= $this->Form->create($datation) ?>
                            <?php
                                    echo $this->Form->input('type_datation', ['label' => 'Type de datation']);
                                    echo $this->Form->input('date_bp', ['label' => 'Date Before Present']);
                                    echo $this->Form->input('erreur_standard', ['label' => 'Erreur standard']);
                                    echo $this->Form->input('date_calibree', ['label' => 'Date calibrée']);

                                    echo $this->Form->input('culture_associee', ['label' => 'Culture associée']);
                                    echo $this->Form->input('discipline', ['label' => 'Discipline']);


                                    echo $this->Form->input('commentaire', ['label' => 'Commentaire']);

                                    ?>
                        </div>
                        <div class="col-md-3" style="padding-top: 25px;">
                            <div>
                                <?= $this->Form->button('Enregistrer les modifications', ['type' => 'submit']) ?>
                            </div>
                            <div style="padding-top: 40px;">
                                <?= $this->Form->postLink('Supprimer la datation', ['action' => 'delete', $datation->id], [ 'class' => 'btn btn-danger', 'confirm' => __('Supprimer cette datation ?'), 'escape' => false, 'block' => 'deleteform']) ?>
                            </div>
                            <div style="padding-top: 40px;">
                                <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                echo $this->Form->input('annee_prise_echantillon', ['label' => 'Année de prise de l\'échantillon']);
                                echo $this->Form->input('code_reference', ['label' => 'Code de reference de l\'échantillon']);
                            ?>
                            <label>Laboratoire d'analyse</label>
                            <?php echo $this->Form->select('laboratoire_id', $laboratoires, ['empty' => true, 'style' => 'display:inline-block; width: 100% !important;']); ?><br/>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_3">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Site de récolte</label>
                            <?php
                                echo $this->Form->select('site_id', $sites, ['empty' => true, 'style' => 'display:inline-block; width:100% !important;']);
                            ?><br/><br/>
                            <?php
                                echo $this->Form->input('horizon_culturel', ['label' => 'Horizon culturelle']);
                                echo $this->Form->input('numero_structure', ['label' => 'Numéro de structure']);
                                echo $this->Form->input('detail_site_recolte', ['label' => 'Détail de la structure']);

                            ?>
                            <?php echo $this->Form->input('source_id', ['options' => $sources]); ?>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_4">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->Form->select('materiels._ids', $materiels, ['multiple' => true, 'class' => 'materiel-select-list', 'style' => 'width: 100% !important']); ?>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_5">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->Form->select('objets._ids', $objets, ['multiple' => true, 'class' => 'objet-select-list', 'style' => 'width: 100% !important']);?>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_6">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $this->Form->select('publications._ids', $publications, ['multiple' => true, 'class' => 'publication-select-list', 'style' => 'width: 100% !important']); ?>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
</div>