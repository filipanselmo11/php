<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Complaint'), ['controller' => 'Complaint', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Complaint'), ['controller' => 'Complaint', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($user->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth') ?></th>
            <td><?= h($user->birth) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Complaint') ?></h4>
        <?php if (!empty($user->complaint)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Neighborhood') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Numb') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->complaint as $complaint): ?>
            <tr>
                <td><?= h($complaint->id) ?></td>
                <td><?= h($complaint->user_id) ?></td>
                <td><?= h($complaint->neighborhood) ?></td>
                <td><?= h($complaint->street) ?></td>
                <td><?= h($complaint->numb) ?></td>
                <td><?= h($complaint->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Complaint', 'action' => 'view', $complaint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Complaint', 'action' => 'edit', $complaint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Complaint', 'action' => 'delete', $complaint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $complaint->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
