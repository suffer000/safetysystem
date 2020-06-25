<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MTemplate[]|\Cake\Collection\CollectionInterface $mTemplates
 */
?>
<div class="mTemplates index content">
    <?= $this->Html->link(__('New M Template'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('M Templates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('template_id') ?></th>
                    <th><?= $this->Paginator->sort('template_title') ?></th>
                    <th><?= $this->Paginator->sort('template_text') ?></th>
                    <th><?= $this->Paginator->sort('create_time') ?></th>
                    <th><?= $this->Paginator->sort('update_time') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mTemplates as $mTemplate): ?>
                <tr>
                    <td><?= $this->Number->format($mTemplate->template_id) ?></td>
                    <td><?= h($mTemplate->template_title) ?></td>
                    <td><?= h($mTemplate->template_text) ?></td>
                    <td><?= h($mTemplate->create_time) ?></td>
                    <td><?= h($mTemplate->update_time) ?></td>
                    <td><?= h($mTemplate->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mTemplate->template_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mTemplate->template_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mTemplate->template_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mTemplate->template_id)]) ?>
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
