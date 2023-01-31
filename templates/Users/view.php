<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?php echo$this->Url->build('/') ?>"><span>Cake</span>PHP</a>
    </div>
    <div class="top-nav-links">
        <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>
        <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
    </div>
</nav>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Log Out'), ['action' => 'logout'], ['class' => 'side-nav-item']) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
