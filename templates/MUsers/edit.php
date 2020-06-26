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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mUser->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mUser->user_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List M Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mUsers form content">
            <?= $this->Form->create($mUser) ?>
            <fieldset>
                <legend><?= __('Edit M User') ?></legend>
                <?php
                    echo $this->Form->control('user_name');
                    echo $this->Form->control('department_id', ['options' => $mDepartments]);
                    echo $this->Form->control('area_id', ['options' => $mAreas]);
                    echo $this->Form->control('user_permission');
                    echo $this->Form->control('user_address');
                    echo $this->Form->control('user_login_name');
                    echo $this->Form->control('user_password');
                    echo $this->Form->control('user_memo');
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('updated_by');
                    echo $this->Form->control('deleted', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
