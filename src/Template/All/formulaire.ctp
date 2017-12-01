<?php if($remote == 'site'): ?>
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
                                echo $this->Form->input('source_id', ['options' => $sources, 'empty' => false, 'label' => 'Distribution géographique']);
                                ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-danger" data-annuler="true">Annuler</button>
                <?= $this->Form->button('Valider', ['type' => 'submit', 'class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </section>
<?php endif; ?>



<?php if($remote == 'publication'): ?>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Enrégistrer une publication</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->create($publication) ?>
                        <div style="padding: 0; margin-bottom: 1.2rem;">
                            <label style="width: 15%">Auteur(s)</label>
                            <?php if(!isset($auteur)):  ?>
                                <?php echo $this->Form->select('auteurs._ids', $auteurs, ['multiple' => true, 'style' => 'width: 60%;', 'class' => 'auteur-select-list']);?>
                            <?php else: ?>
                                <?php echo $this->Form->select('auteurs._ids', $auteurs, ['multiple' => true, 'style' => 'width: 60%;', 'default' =>[$auteur->id], 'class' => 'auteur-select-list']);?>
                            <?php endif; ?>
                            <button class="btn btn-primary" value="auteur" data-archeologie="true" style="width: 23%; display: inline-block">Créer un auteur</button>
                        </div>
                            <?php
                                echo $this->Form->input('annee', ['label' => 'Année de publication', 'class' => 'form-control']);
                                echo $this->Form->input('title', ['label' => 'Titre publication', 'class' => 'form-control']);
                                echo $this->Form->input('reference', ['label' => 'Reférence bibliographique', 'class' => 'form-control']);
                            echo $this->Form->input('source_id', ['label' => 'Source des données', 'options' => $sources, 'empty' => false, 'class' => 'form-control']);
                        ?>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-danger" data-annuler="true">Annuler</button>
                <?= $this->Form->button('Valider', ['type' => 'submit', 'class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </section>
<?php endif; ?>



<?php if($remote == 'laboratoire'): ?>
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Enrégistrer un laboratoire</h3>
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
                <button class="btn btn-danger" type="button" data-annuler="true">Annuler</button>
                <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </section>
<?php endif; ?>




<?php if($remote == 'objet'): ?>
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
            <button class="btn btn-danger" type="button" data-annuler="true">Annuler</button>
            <!--<button class="btn btn-primary" type="submit" data-enregistrer="true">Enregistrer</button>-->
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
<?php endif; ?>



<?php if($remote == 'auteur'): ?>
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Enrégistrer un auteur</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create($auteur) ?>
                    <?php echo $this->Form->input('name', ['label'=>'Nom de l\'auteur', 'escape' => false]);?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-danger" type="button" data-annuler="true">Annuler</button>
            <!--<button class="btn btn-primary" type="submit" data-enregistrer="true">Enregistrer</button>-->
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
<?php endif; ?>

