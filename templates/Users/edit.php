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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
