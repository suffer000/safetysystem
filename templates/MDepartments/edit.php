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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mDepartment->department_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mDepartment->department_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List M Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mDepartments form content">
            <?= $this->Form->create($mDepartment) ?>
            <fieldset>
                <legend><?= __('Edit M Department') ?></legend>
                <?php
                    echo $this->Form->control('department_name');
                    echo $this->Form->control('department_description');
                    echo $this->Form->control('create_time');
                    echo $this->Form->control('update_time', ['empty' => true]);
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
