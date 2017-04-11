


<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3>Edition : <?= h($user->email); ?></h3>
        </div>
        <div class="box-body">
            <div class="col-md-9">
                <?= $this->Form->create($user) ?>
                <?php
                    echo $this->Form->input('email');
                    echo $this->Form->input('password');
                    echo $this->Form->input('role_id', ['options' => $roles, 'empty' => true]);
                ?>
            </div>
            <div class="col-md-3" style="padding-top: 26px;">
                <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $user->id], [ 'class' => 'btn btn-danger', 'confirm' => __('Voulez vous supprimer {0}?', $user->email), 'escape' => false, 'block' => 'deleteform']) ?>
            </div>
        </div>
        <div class="box-footer">
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</section>
