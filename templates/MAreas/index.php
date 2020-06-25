<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MArea[]|\Cake\Collection\CollectionInterface $mAreas
 */
?>
<div class="mAreas index content">
    <?= $this->Html->link(__('New M Area'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('M Areas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('area_id') ?></th>
                    <th><?= $this->Paginator->sort('area_name') ?></th>
                    <th><?= $this->Paginator->sort('create_time') ?></th>
                    <th><?= $this->Paginator->sort('update_time') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mAreas as $mArea): ?>
                <tr>
                    <td><?= $this->Number->format($mArea->area_id) ?></td>
                    <td><?= h($mArea->area_name) ?></td>
                    <td><?= h($mArea->create_time) ?></td>
                    <td><?= h($mArea->update_time) ?></td>
                    <td><?= h($mArea->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mArea->area_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mArea->area_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mArea->area_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mArea->area_id)]) ?>
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
