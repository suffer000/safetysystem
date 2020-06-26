<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MUser[]|\Cake\Collection\CollectionInterface $mUsers
 */
?>
<div class="mUsers index content">
    <?= $this->Html->link(__('New M User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('M Users') ?></h3>
    <?= $this->Form->input('find'); ?>
    <button type="button" name="aaa" value="aaa">
    <font size="5" color="#333399">検索</font>
    </button>
    <div >
    <form method="POST" name="contactform" action="test2.php">
        名前<br />
        <input type="text" name="user_name" value="" /><br /><br />
        問い合わせ内容<br />
        <textarea name="user_question"></textarea><br /><br />
        <input type="submit" value="問い合わせる" name="contact" onclick="return confirm_test()" />
    </form>
    
    <div id="popup" style="width: 200px;display: none;padding: 30px 20px;border: 2px solid #000;margin: auto;">
        問い合わせますか？<br />
        <button id="ok" onclick="okfunc()">OK</button>
        <button id="no" onclick="nofunc()">キャンセル</button>
    </div>
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
                    <!-- <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated_by') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th> -->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mUsers as $mUser): ?>
                <tr>
                    <td><?= $this->Number->format($mUser->user_id) ?></td>
                    <td><?= h($mUser->user_name) ?></td>
                    <td><?= $mUser->has('m_department') ? $this->Html->link($mUser->m_department->department_id, ['controller' => 'Mdepartments', 'action' => 'view', $mUser->m_department->department_id]) : '' ?></td>
                    <td><?= $mUser->has('m_area') ? $this->Html->link($mUser->m_area->area_id, ['controller' => 'Mareas', 'action' => 'view', $mUser->m_area->area_id]) : '' ?></td>
                    <td><?= $this->Number->format($mUser->user_permission) ?></td>
                    <td><?= h($mUser->user_address) ?></td>
                    <td><?= h($mUser->user_login_name) ?></td>
                    <td><?= h($mUser->user_password) ?></td>
                    <td><?= h($mUser->user_memo) ?></td>
                    <!-- <td><?= $this->Number->format($mUser->created_by) ?></td>
                    <td><?= h($mUser->created) ?></td>
                    <td><?= $this->Number->format($mUser->updated_by) ?></td>
                    <td><?= h($mUser->modified) ?></td>
                    <td><?= h($mUser->deleted) ?></td> -->
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

<script>
 function confirm_test() { // 問い合わせるボタンをクリックした場合
    document.getElementById('popup').style.display = 'block';
    return false;
}
 
function okfunc() { // OKをクリックした場合
    document.contactform.submit();
}
 
function nofunc() { // キャンセルをクリックした場合
    document.getElementById('popup').style.display = 'none';
}
</script>
