<style>
    body {
        background-color: #333;
        color: white;
        /*font-size: 24px;*/
    }

    #Form {
        margin-left: 25%;
        margin-top: 100px;
        padding-bottom: 20px;
        background-color: #F69420;
        width: 600px;
        height: auto;
        border-radius: 15px;
    }

    .button{
        border-radius: 50px;
        background-color: red;
        margin-left: 35%;
        background-color: blue;
    }
</style>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilizadore $utilizadore
 */
?>

<div class="utilizadores form large-9 medium-8 columns content" id="Form">
    <?= $this->Form->create($utilizadore) ?>
    <?php
        echo $this->Form->control('utilizador');
        echo $this->Form->control('password');
        echo $this->Form->control('nome');
        echo $this->Form->control('idade');
        echo $this->Form->control('morada');
        //echo $this->Form->control('profissao');
        //echo $this->Form->control('formacao');
        echo $this->Form->control('genero');
        //echo $this->Form->control('bio');
        //echo $this->Form->control('chat._ids', ['options' => $chat]);
        ?>
        
    <?= $this->Form->submit(__('Registar' ,array('class' => 'button'))); ?>
    <?= $this->Form->end() ?>
</div>