<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manager $manager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="managers form large-9 medium-8 columns content">
    <?= $this->Form->create($manager) ?>
    <fieldset>
        <legend><?= __('Add Manager') ?></legend>
        <?php
            echo $this->Form->control('mail1');
            echo $this->Form->control('password');
            echo $this->Form->control('last_name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_kana');
            echo $this->Form->control('first_kana');
            echo $this->Form->control('department');
            echo $this->Form->control('auth');
            echo $this->Form->control('is_deleted');
            echo $this->Form->control('create_manager');
            echo $this->Form->control('create_at');
            echo $this->Form->control('update_manager');
            echo $this->Form->control('update_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
