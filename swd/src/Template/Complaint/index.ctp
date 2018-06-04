<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Complaint[]|\Cake\Collection\CollectionInterface $complaint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Complaint'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="complaint index large-9 medium-8 columns content">
    <h3><?= __('Complaint') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('neighborhood') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numb') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($complaint as $complaint): ?>
            <tr>
                <td><?= $this->Number->format($complaint->id) ?></td>
                <td><?= $complaint->has('user') ? $this->Html->link($complaint->user->name, ['controller' => 'Users', 'action' => 'view', $complaint->user->id]) : '' ?></td>
                <td><?= h($complaint->neighborhood) ?></td>
                <td><?= h($complaint->street) ?></td>
                <td><?= $this->Number->format($complaint->numb) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $complaint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $complaint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $complaint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $complaint->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
