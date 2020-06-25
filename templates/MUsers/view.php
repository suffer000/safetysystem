<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MUser $mUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit M User'), ['action' => 'edit', $mUser->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete M User'), ['action' => 'delete', $mUser->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mUser->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List M Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New M User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mUsers view content">
            <h3><?= h($mUser->user_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User Name') ?></th>
                    <td><?= h($mUser->user_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('M Department') ?></th>
                    <td><?= $mUser->has('m_department') ? $this->Html->link($mUser->m_department->department_id, ['controller' => 'MDepartments', 'action' => 'view', $mUser->m_department->department_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('M Area') ?></th>
                    <td><?= $mUser->has('m_area') ? $this->Html->link($mUser->m_area->area_id, ['controller' => 'MAreas', 'action' => 'view', $mUser->m_area->area_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User Address') ?></th>
                    <td><?= h($mUser->user_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Login Name') ?></th>
                    <td><?= h($mUser->user_login_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Password') ?></th>
                    <td><?= h($mUser->user_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Memo') ?></th>
                    <td><?= h($mUser->user_memo) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($mUser->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Permission') ?></th>
                    <td><?= $this->Number->format($mUser->user_permission) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= $this->Number->format($mUser->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated By') ?></th>
                    <td><?= $this->Number->format($mUser->updated_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Time') ?></th>
                    <td><?= h($mUser->create_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Update Time') ?></th>
                    <td><?= h($mUser->update_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $mUser->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
