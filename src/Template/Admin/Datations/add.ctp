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
                                <?= $this->Form->button('<span class="glyphicon glyphicon-floppy-save"></span> Enregistrer', ['type' => 'submit', 'class' => 'btn btn-sm btn-primary' , 'escape' => false]) ?>
                            </div>
                            <div style="padding-top: 40px;">
                                <?= $this->Html->link('<span class="glyphicon glyphicon-remove"></span> Annuler', ['action' => 'index'], ['class' => 'btn btn-warning', 'escape' => false]) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-md-9">
                            <?php
                                echo $this->Form->input('annee_prise_echantillon', ['label' => 'Année de prise de l\'échantillon']);
                                echo $this->Form->input('code_reference', ['label' => 'Code de reference de l\'échantillon']);
                            ?>
                            <label>Laboratoire d'analyse</label>
                            <?php echo $this->Form->select('laboratoire_id', $laboratoires, ['empty' => true, 'style' => 'display:inline-block; width: 100% !important;']); ?><br/>
                        </div>
                        <div class="col-md-3" style="padding-top: 25px;">
                            <button class="btn btn-sm btn-primary" data-archeologie="true" value="laboratoire">Créer un nouveau laboratoire ?</button>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_3">
                    <div class="row">
                        <div class="col-md-9">
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
                        <div class="col-md-3" style="padding-top: 25px;">
                            <button data-archeologie="true" value="site" class="btn btn-sm btn-primary">Créer un nouveau site ?</button>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_4">
                    <div class="row">
                        <div class="col-md-9">
                            <?php echo $this->Form->select('materiels._ids', $materiels, ['multiple' => true, 'class' => 'materiel-select-list', 'style' => 'width: 100% !important']); ?>
                        </div>
                        <div class="col-md-3">
                            <button data-archeologie="true" value="objet" class="btn btn-sm btn-primary">Créer un nouveau objet ?</button>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_5">
                    <div class="row">
                        <div class="col-md-9">
                            <?php echo $this->Form->select('objets._ids', $objets, ['multiple' => true, 'class' => 'objet-select-list', 'style' => 'width: 100% !important']);?>
                        </div>
                        <div class="col-md-3">
                            <button data-archeologie="true" value="objet" class="btn btn-sm btn-primary">Créer un nouveau objet ?</button>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_6">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-9">
                                <?php echo $this->Form->select('publications._ids', $publications, ['multiple' => true, 'class' => 'publication-select-list', 'style' => 'width: 100% !important']); ?>
                            </div>
                            <div class="col-md-3">
                                <button data-archeologie="true" value="publication" class="btn btn-sm btn-primary">Créer une nouvelle publication ?</button>
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
<div id="modal_add_form" style="position: absolute; top: 0;left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 999; display: none;">
    <div id="modal_add_form_content" class="col-md-6 col-md-offset-3" style="height: 100%; margin-bottom: 34px; margin-top: 34px; overflow-y: auto;"></div>
</div>
<input type="hidden" id="ajaxcreate" value="<?= Cake\Routing\Router::url(['controller'=>'Datations', 'action'=>'ajaxform', 'prefix'=>'admin']); ?>" />