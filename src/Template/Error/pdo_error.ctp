<?php
    use Cake\Core\Configure;
    use Cake\Error\Debugger;

    $this->layout = 'error';
?>
<div class="alert alert-danger">
    <?= h($message) ?>
</div>