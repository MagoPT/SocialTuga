<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilizadore[]|\Cake\Collection\CollectionInterface $utilizadores
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li>
            <?php
            echo $this->Form->create("Post", array(
                "action" => "search",
                "id" => "searchForm"
            ));
            echo $this->Form->input("keyword", array(
                "label" => "",
                "type" => "search",
                "placeholder" => "Procurar..."
            ));
            echo $this->Form->end();
            ?>
        </li>
        <li><?= $this->Html->link(__('New Utilizador'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chat'), ['controller' => 'Chat', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chat'), ['controller' => 'Chat', 'action' => 'add']) ?></li>

    </ul>
</nav>
<div class="utilizadores index large-9 medium-8 columns content">
    <h3><?= __('Utilizadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
            <th scope="col"><?= $this->Paginator->sort('idade') ?></th>
            <th scope="col"><?= $this->Paginator->sort('bio') ?></th>
            <th scope="col"><?= $this->Paginator->sort('utilizador') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($utilizadores as $utilizadore): ?>
            <tr>
                <td><?= h($utilizadore->nome) ?></td>
                <td><?= $this->Number->format($utilizadore->idade) ?></td>
                <td><?= h($utilizadore->bio) ?></td>
                <td><?= h($utilizadore->utilizador) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'profile', $utilizadore->id_utilizador]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilizadore->id_utilizador]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilizadore->id_utilizador], ['confirm' => __('Are you sure you want to delete # {0}?', $utilizadore->id_utilizador)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
