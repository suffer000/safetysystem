<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MDepartment[]|\Cake\Collection\CollectionInterface $mDepartments
 */
?>
<div class="mDepartments index content">
    <?= $this->Html->link(__('New M Department'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('M Departments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('department_name') ?></th>
                    <th><?= $this->Paginator->sort('department_description') ?></th>
                    <th><?= $this->Paginator->sort('create_time') ?></th>
                    <th><?= $this->Paginator->sort('update_time') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mDepartments as $mDepartment): ?>
                <tr>
                    <td><?= $this->Number->format($mDepartment->department_id) ?></td>
                    <td><?= h($mDepartment->department_name) ?></td>
                    <td><?= h($mDepartment->department_description) ?></td>
                    <td><?= h($mDepartment->create_time) ?></td>
                    <td><?= h($mDepartment->update_time) ?></td>
                    <td><?= h($mDepartment->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mDepartment->department_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mDepartment->department_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mDepartment->department_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mDepartment->department_id)]) ?>
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
