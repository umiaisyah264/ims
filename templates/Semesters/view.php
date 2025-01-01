<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semester $semester
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Semester'), ['action' => 'edit', $semester->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Semester'), ['action' => 'delete', $semester->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semester->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Semesters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Semester'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="semesters view content">
            <h3><?= h($semester->session) ?></h3>
            <table>
                <tr>
                    <th><?= __('Session') ?></th>
                    <td><?= h($semester->session) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($semester->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= $this->Number->format($semester->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($semester->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($semester->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($semester->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Applications') ?></h4>
                <?php if (!empty($semester->applications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Street 1') ?></th>
                            <th><?= __('Street 2') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Pic Name') ?></th>
                            <th><?= __('Pic Email') ?></th>
                            <th><?= __('Semester Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($semester->applications as $application) : ?>
                        <tr>
                            <td><?= h($application->id) ?></td>
                            <td><?= h($application->user_id) ?></td>
                            <td><?= h($application->company_name) ?></td>
                            <td><?= h($application->street_1) ?></td>
                            <td><?= h($application->street_2) ?></td>
                            <td><?= h($application->postcode) ?></td>
                            <td><?= h($application->city) ?></td>
                            <td><?= h($application->state) ?></td>
                            <td><?= h($application->pic_name) ?></td>
                            <td><?= h($application->pic_email) ?></td>
                            <td><?= h($application->semester_id) ?></td>
                            <td><?= h($application->status) ?></td>
                            <td><?= h($application->created) ?></td>
                            <td><?= h($application->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $application->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $application->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>