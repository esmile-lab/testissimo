<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manager $manager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Manager'), ['action' => 'edit', $manager->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manager'), ['action' => 'delete', $manager->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="managers view large-9 medium-8 columns content">
    <h3><?= h($manager->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mail1') ?></th>
            <td><?= h($manager->mail1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($manager->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($manager->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($manager->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Kana') ?></th>
            <td><?= h($manager->last_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Kana') ?></th>
            <td><?= h($manager->first_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= h($manager->department) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($manager->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auth') ?></th>
            <td><?= $this->Number->format($manager->auth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($manager->is_deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Manager') ?></th>
            <td><?= $this->Number->format($manager->create_manager) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Manager') ?></th>
            <td><?= $this->Number->format($manager->update_manager) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create At') ?></th>
            <td><?= h($manager->create_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update At') ?></th>
            <td><?= h($manager->update_at) ?></td>
        </tr>
    </table>
</div>
