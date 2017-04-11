
<section class="content">
<div class="box box-default">
    <div class="box-header with-border">
        <h3>Edition : <?= h($role->name); ?></h3>
    </div>
    <div class="box-body">
        <div class="col-md-9">
            <?= $this->Form->create($role) ?>
            <?php
                    echo $this->Form->input('name');
                    ?>
        </div>
        <div class="col-md-3" style="padding-top: 26px;">
            <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $role->id], [ 'class' => 'btn btn-danger', 'confirm' => __('Voulez vous supprimer {0}?', $role->name), 'escape' => false, 'block' => 'deleteform']) ?>
        </div>
    </div>
    <div class="box-footer">
        <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
        <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
        <?= $this->Form->end() ?>
    </div>

</div>
</section>