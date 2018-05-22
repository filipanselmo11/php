<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Complaint $complaint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $complaint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $complaint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Complaint'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="complaint form large-9 medium-8 columns content">
    <?= $this->Form->create($complaint) ?>
    <fieldset>
        <legend><?= __('Edit Complaint') ?></legend>
        <?php
            echo $this->Form->control('id_user');
            echo $this->Form->control('neighborhood');
            echo $this->Form->control('street');
            echo $this->Form->control('numb');
            echo $this->Form->control('description_complaint');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
