<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $semesters
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="applications form content">
            <?= $this->Form->create($application) ?>
            <fieldset>
                <legend><?= __('Add Application') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('street_1');
                    echo $this->Form->control('street_2');
                    echo $this->Form->control('postcode');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('pic_name');
                    echo $this->Form->control('pic_email');
                    echo $this->Form->control('semester_id', ['options' => $semesters]);
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
