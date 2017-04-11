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
                                echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true, 'label' => 'Distribution géographique']);
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
                        <?php
                                echo $this->Form->input('title', ['label' => 'Titre publication']);
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
                <button class="btn btn-danger" data-annuler="true">Annuler</button>
                <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
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
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
<?php endif; ?>