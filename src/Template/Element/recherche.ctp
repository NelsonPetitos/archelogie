<form class="form-inline">
    <div class="form-group">
        <input type="email" class="form-control" id="" placeholder="Mots clés">
    </div>
    <button type="submit" class="btn btn-primary">Lancer la recherche</button>
    <?php if (isset($activedatation)): ?>
    <?= $this->Html->link('Recherche avancée', ['controller' => 'Datations', 'action' => 'search', 'prefix' => 'afrique'], ['class' => 'btn btn-info']); ?>
    <?php endif; ?>

    <?php if (isset($activepublication)): ?>
    <?= $this->Html->link('Recherche avancée', ['controller' => 'Publications', 'action' => 'search', 'prefix' => 'afrique'], ['class' => 'btn btn-info']); ?>
    <?php endif; ?>

    <?php if (isset($activesite)): ?>
    <?= $this->Html->link('Recherche avancée', ['controller' => 'Sites', 'action' => 'search', 'prefix' => 'afrique'], ['class' => 'btn btn-info']); ?>
    <?php endif; ?>
</form>

