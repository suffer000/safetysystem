<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MDepartment $mDepartment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit M Department'), ['action' => 'edit', $mDepartment->department_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete M Department'), ['action' => 'delete', $mDepartment->department_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mDepartment->department_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List M Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New M Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mDepartments view content">
            <h3><?= h($mDepartment->department_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department Name') ?></th>
                    <td><?= h($mDepartment->department_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department Description') ?></th>
                    <td><?= h($mDepartment->department_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department Id') ?></th>
                    <td><?= $this->Number->format($mDepartment->department_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Time') ?></th>
                    <td><?= h($mDepartment->create_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Update Time') ?></th>
                    <td><?= h($mDepartment->update_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $mDepartment->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
