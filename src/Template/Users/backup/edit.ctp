<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $utilizadore->id_utilizador],
                ['confirm' => __('Are you sure you want to delete # {0}?', $utilizadore->id_utilizador)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Utilizadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Chat'), ['controller' => 'Chat', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chat'), ['controller' => 'Chat', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utilizadores form large-9 medium-8 columns content">
    <?= $this->Form->create($utilizadore) ?>
    <fieldset>
        <legend><?= __('Editar Utilizadore') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('idade');
            echo $this->Form->control('morada');
            echo $this->Form->control('profissao');
            echo $this->Form->control('formacao');
            echo $this->Form->control('genero');
            echo $this->Form->control('bio');
            echo $this->Form->control('utilizador');
            echo $this->Form->control('password');
            echo $this->Form->control('chat._ids', ['options' => $chat]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
