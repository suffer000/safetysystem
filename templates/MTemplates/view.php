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
            <?= $this->Html->link(__('Edit M Template'), ['action' => 'edit', $mTemplate->template_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete M Template'), ['action' => 'delete', $mTemplate->template_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mTemplate->template_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List M Templates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New M Template'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mTemplates view content">
            <h3><?= h($mTemplate->template_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Template Title') ?></th>
                    <td><?= h($mTemplate->template_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Template Text') ?></th>
                    <td><?= h($mTemplate->template_text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Template Id') ?></th>
                    <td><?= $this->Number->format($mTemplate->template_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Time') ?></th>
                    <td><?= h($mTemplate->create_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Update Time') ?></th>
                    <td><?= h($mTemplate->update_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $mTemplate->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
