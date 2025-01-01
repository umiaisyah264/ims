<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $program->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $program->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="programs form content">
            <?= $this->Form->create($program) ?>
            <fieldset>
                <legend><?= __('Edit Program') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
