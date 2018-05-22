<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Complaint $complaint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Complaint'), ['action' => 'edit', $complaint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Complaint'), ['action' => 'delete', $complaint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $complaint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Complaint'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Complaint'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="complaint view large-9 medium-8 columns content">
    <h3><?= h($complaint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Neighborhood') ?></th>
            <td><?= h($complaint->neighborhood) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($complaint->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($complaint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($complaint->id_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numb') ?></th>
            <td><?= $this->Number->format($complaint->numb) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description Complaint') ?></h4>
        <?= $this->Text->autoParagraph(h($complaint->description_complaint)); ?>
    </div>
</div>
