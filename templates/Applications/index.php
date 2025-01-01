<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Application> $applications
 */
?>
<div class="applications index content">
    <?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Applications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('company_name') ?></th>
                    <th><?= $this->Paginator->sort('street_1') ?></th>
                    <th><?= $this->Paginator->sort('street_2') ?></th>
                    <th><?= $this->Paginator->sort('postcode') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('pic_name') ?></th>
                    <th><?= $this->Paginator->sort('pic_email') ?></th>
                    <th><?= $this->Paginator->sort('semester_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applications as $application): ?>
                <tr>
                    <td><?= $this->Number->format($application->id) ?></td>
                    <td><?= $application->hasValue('user') ? $this->Html->link($application->user->fullname, ['controller' => 'Users', 'action' => 'view', $application->user->id]) : '' ?></td>
                    <td><?= h($application->company_name) ?></td>
                    <td><?= h($application->street_1) ?></td>
                    <td><?= h($application->street_2) ?></td>
                    <td><?= $this->Number->format($application->postcode) ?></td>
                    <td><?= h($application->city) ?></td>
                    <td><?= h($application->state) ?></td>
                    <td><?= h($application->pic_name) ?></td>
                    <td><?= h($application->pic_email) ?></td>
                    <td><?= $application->hasValue('semester') ? $this->Html->link($application->semester->session, ['controller' => 'Semesters', 'action' => 'view', $application->semester->id]) : '' ?></td>
                    <td><?= $this->Number->format($application->status) ?></td>
                    <td><?= h($application->created) ?></td>
                    <td><?= h($application->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>