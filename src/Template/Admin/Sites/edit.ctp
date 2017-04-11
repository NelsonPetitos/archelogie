<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3>Editer le site : <?= h($site->name); ?></h3>
        </div>
        <div class="box-body">
            <div class="col-md-9">
                <?= $this->Form->create($site) ?>
                <?php
                    echo $this->Form->input('name', ['label' => 'Nom du site']);
                    echo $this->Form->input('type', ['label' => 'Type de site']);
                    echo $this->Form->input('latitude', ['label' => 'Latitude']);
                    echo $this->Form->input('longitude', ['label' => 'Logitude']);
                    echo $this->Form->input('contry', ['label' => 'Pays']);
                    echo $this->Form->input('province', ['label' => 'Province']);
                    echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true, 'label' => 'Distribution géographique']);
                ?>
            </div>
            <div class="col-md-3" style="padding-top: 26px;">
                <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $site->id], [ 'class' => 'btn btn-danger', 'confirm' => __('Voulez vous supprimer {0}?', $site->name), 'escape' => false, 'block' => 'deleteform']) ?>
            </div>
        </div>
        <div class="box-footer">
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</section>

