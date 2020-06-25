<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MArea $mArea
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit M Area'), ['action' => 'edit', $mArea->area_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete M Area'), ['action' => 'delete', $mArea->area_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mArea->area_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List M Areas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New M Area'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mAreas view content">
            <h3><?= h($mArea->area_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Area Name') ?></th>
                    <td><?= h($mArea->area_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Area Id') ?></th>
                    <td><?= $this->Number->format($mArea->area_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Time') ?></th>
                    <td><?= h($mArea->create_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Update Time') ?></th>
                    <td><?= h($mArea->update_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $mArea->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
