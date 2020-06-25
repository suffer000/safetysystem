<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MUser[]|\Cake\Collection\CollectionInterface $mUsers
 */
?>
<div class="mUsers index content">
    <?= $this->Html->link(__('New M User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('M Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('user_name') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('area_id') ?></th>
                    <th><?= $this->Paginator->sort('user_permission') ?></th>
                    <th><?= $this->Paginator->sort('user_address') ?></th>
                    <th><?= $this->Paginator->sort('user_login_name') ?></th>
                    <th><?= $this->Paginator->sort('user_password') ?></th>
                    <th><?= $this->Paginator->sort('user_memo') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('create_time') ?></th>
                    <th><?= $this->Paginator->sort('updated_by') ?></th>
                    <th><?= $this->Paginator->sort('update_time') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mUsers as $mUser): ?>
                <tr>
                    <td><?= $this->Number->format($mUser->user_id) ?></td>
                    <td><?= h($mUser->user_name) ?></td>
                    <td><?= $mUser->has('m_department') ? $this->Html->link($mUser->m_department->department_id, ['controller' => 'MDepartments', 'action' => 'view', $mUser->m_department->department_id]) : '' ?></td>
                    <td><?= $mUser->has('m_area') ? $this->Html->link($mUser->m_area->area_id, ['controller' => 'MAreas', 'action' => 'view', $mUser->m_area->area_id]) : '' ?></td>
                    <td><?= $this->Number->format($mUser->user_permission) ?></td>
                    <td><?= h($mUser->user_address) ?></td>
                    <td><?= h($mUser->user_login_name) ?></td>
                    <td><?= h($mUser->user_password) ?></td>
                    <td><?= h($mUser->user_memo) ?></td>
                    <td><?= $this->Number->format($mUser->created_by) ?></td>
                    <td><?= h($mUser->create_time) ?></td>
                    <td><?= $this->Number->format($mUser->updated_by) ?></td>
                    <td><?= h($mUser->update_time) ?></td>
                    <td><?= h($mUser->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mUser->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mUser->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mUser->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mUser->user_id)]) ?>
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
