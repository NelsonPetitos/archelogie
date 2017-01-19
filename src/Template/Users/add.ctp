<?= $this->start('Navigation'); ?>
    <?= $this->element('navigation', ['activeClass' => '6']); ?>
<?= $this->end(); ?>


<div class="col-md-4 col-md-offset-4 panel panel-default" style="margin-top: 100px; padding: 20px;">

    <?php
        echo $this->Form->input('email', ['label' => 'Email']);
        echo $this->Form->input('password', ['label' => 'Mot de passe']);
        echo $this->Form->input('role_id', ['options' => $roles, 'empty' => true, 'label' => 'Rôle']);
    ?>
    <?= $this->Form->button(__('Enrégistrer')) ?>
    <?= $this->Form->end() ?>
    <div class="text-right" >
        <a href="<?= Cake\Routing\Router::url(['_name' => 'login']); ?>">Vous avez déjà un compte ?</a>
    </div>
</div>

