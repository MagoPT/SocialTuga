<h1>Adicionar publicação</h1>
<?php
    echo $this->Form->create($publicacoes);
    echo $this->Form->input('titulo', array('label' => 'Título'));
    echo $this->Form->input('descricao', ['rows' => '3'], array('label' => 'Descrição'));
    echo $this->Form->button(__('Criar publicação'), array('style'=>'margin-top:10px;color:white'));
    echo $this->Form->end();
?>