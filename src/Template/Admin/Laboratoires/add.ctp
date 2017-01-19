<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
    <!--<ul class="side-nav">-->
        <!--<li class="heading"><?= __('Actions') ?></li>-->
        <!--<li><?= $this->Html->link(__('List Laboratoires'), ['action' => 'index']) ?></li>-->
        <!--<li><?= $this->Html->link(__('List Datations'), ['controller' => 'Datations', 'action' => 'index']) ?></li>-->
        <!--<li><?= $this->Html->link(__('New Datation'), ['controller' => 'Datations', 'action' => 'add']) ?></li>-->
    <!--</ul>-->
<!--</nav>-->
<!--<div class="laboratoires form large-9 medium-8 columns content">-->
    <!--<?= $this->Form->create($laboratoire) ?>-->
    <!--<fieldset>-->
        <!--<legend><?= __('Add Laboratoire') ?></legend>-->
        <!--<?php-->
            <!--echo $this->Form->input('code_laboratoire');-->
            <!--echo $this->Form->input('description');-->
            <!--echo $this->Form->input('datation_count');-->
        <!--?>-->
    <!--</fieldset>-->
    <!--<?= $this->Form->button(__('Submit')) ?>-->
    <!--<?= $this->Form->end() ?>-->
<!--</div>-->


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
            <?= $this->Form->button('Valider', ['type' => 'submit']) ?>
            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>
</section>