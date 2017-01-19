<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => '6']); ?>
<?= $this->end(); ?>

<div class="container" style="margin-top: 100px;">
    <?php if(isset($this->Flash)): ?>

    <?php endif; ?>
    <?= $this->Flash->render('auth') ?>
    <div class="col-md-4 col-md-offset-4 row">
        <div class="panel panel-default" style="padding: 20px;">
            <?= $this->Form->create() ?>
            <?= $this->Form->input('email', ['label' => 'Email']) ?>
            <?= $this->Form->input('password', ['label' => 'Mot de passe']) ?>
            <?= $this->Form->button(__('Se connecter')); ?>

            <?= $this->Form->end() ?>
            <div class="text-right">
                <a href="#">Vous n'avez pas de compte ?</a>
            </div>
        </div>
    </div>
</div>



