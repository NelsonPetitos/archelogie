


<!--<section class="content">-->
    <!--<div class="box box-default">-->
        <!--<div class="box-header with-border">-->
            <!--<h3 class="box-title">Modifier datation</h3>-->
        <!--</div>-->
        <!--&lt;!&ndash; /.box-header &ndash;&gt;-->
        <!--<div class="box-body">-->
            <!--<div class="row">-->
                <!--<div class="col-md-12">-->
                    <!--<?= $this->Form->create($datation) ?>-->
                    <!--<?php-->
                            <!--echo $this->Form->input('type_datation');-->
                            <!--echo $this->Form->input('code_reference');-->
                            <!--echo $this->Form->input('date_bp');-->
                            <!--echo $this->Form->input('annee_prise_echantillon');-->
                            <!--echo $this->Form->input('discipline');-->
                            <!--echo $this->Form->input('laboratoire_id', ['options' => $laboratoires, 'empty' => true]);-->
                            <!--echo $this->Form->input('site_id', ['options' => $sites, 'empty' => true]);-->
                            <!--echo $this->Form->input('detail_site_recolte');-->
                            <!--echo $this->Form->input('erreur_standard');-->
                            <!--echo $this->Form->input('culture_associee');-->
                            <!--echo $this->Form->input('horizon_culturel');-->
                            <!--echo $this->Form->input('numero_structure');-->
                            <!--echo $this->Form->input('date_calibree');-->
                            <!--echo $this->Form->input('commentaire');-->
                            <!--echo $this->Form->input('source_id', ['options' => $sources]);-->
                            <!--echo $this->Form->input('materiels._ids', ['options' => $materiels]);-->
                            <!--echo $this->Form->input('objets._ids', ['options' => $objets]);-->
                            <!--echo $this->Form->input('publications._ids', ['options' => $publications]);-->
                            <!--?>-->
                <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.row &ndash;&gt;-->
        <!--</div>-->
        <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
        <!--<div class="box-footer">-->
            <!--<?= $this->Form->button('Valider', ['type' => 'submit']) ?>-->
            <!--<?= $this->Form->end() ?>-->
            <!--<?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>-->
        <!--</div>-->
    <!--</div>-->
<!--</section>-->

<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Details datation</a></li>
                <li><a href="#tab_2" data-toggle="tab">Laboratoire</a></li>
                <li><a href="#tab_3" data-toggle="tab">Site</a></li>
                <li><a href="#tab_4" data-toggle="tab">Materiels</a></li>
                <li><a href="#tab_5" data-toggle="tab">Objets</a></li>
                <li><a href="#tab_6" data-toggle="tab">Publications</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->Form->create($datation) ?>
                            <?php
                                    echo $this->Form->input('type_datation');
                                    echo $this->Form->input('code_reference');
                                    echo $this->Form->input('date_bp');
                                    echo $this->Form->input('annee_prise_echantillon');
                                    echo $this->Form->input('discipline');

                                    echo $this->Form->input('detail_site_recolte');
                                    echo $this->Form->input('erreur_standard');
                                    echo $this->Form->input('culture_associee');
                                    echo $this->Form->input('horizon_culturel');
                                    echo $this->Form->input('numero_structure');
                                    echo $this->Form->input('date_calibree');
                                    echo $this->Form->input('commentaire');
                                    echo $this->Form->input('source_id', ['options' => $sources]);
                                    ?>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_2">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Laboratoire d'analyse</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                        echo $this->Form->select('laboratoire_id', $laboratoires, ['empty' => true, 'multiple' => false]);
                                    ?>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_3">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Site de récolte</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                        echo $this->Form->select('site_id', $sites, ['empty' => true]);
                                    ?>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_4">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                echo $this->Form->select('materiels._ids', $materiels, ['multiple' => 'checkbox']);
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_5">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                echo $this->Form->select('objets._ids', $objets, ['multiple' => 'checkbox']);
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->



                <div class="tab-pane" id="tab_6">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
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
                        ['action' => 'delete', $datation->id],
                        ['class' => 'btn btn-danger', 'confirm' => __('Supprimer datation ?')]
                        )
                        ?>
                    </div>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
</div>