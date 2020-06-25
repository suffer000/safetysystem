<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MTemplate $mTemplate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List M Templates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mTemplates form content">
            <?= $this->Form->create($mTemplate) ?>
            <fieldset>
                <legend><?= __('Add M Template') ?></legend>
                <?php
                    echo $this->Form->control('template_title');
                    echo $this->Form->control('template_text');
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
