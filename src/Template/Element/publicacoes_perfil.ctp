<?php
$contratos = json_decode($this->requestAction('/publicacoes/publicacoes_perfil/'.$limite.'/'.$id_user.'/'.$tipo))  ;
//$articles= json_decode($articles);
?>

<h3><?= __('Ultimos')?><?= $limite?><?= __('Contratos')?></h3>
    
<table>
        <tr>
            <th>Id Contrato</th>
            <?php
            if ($tipo='id_empresa'){
                echo '<th>Id utilizaor</th>';
            }else{
                echo '<th>Id empresa</th>';
            }
            ?>
            <th>Descrição</th>
            <th>Criado</th>
        </tr>
        <tr>
        <?php foreach ($contratos as $contrato): ?>
        <tr>
            <td><?= h($contrato->id_contrato) ?></td>
            <?php
            if ($tipo='id_empresa'){
                echo '<td>'.h($contrato->id_utilizador).'</td>';
            }else{
                echo '<td>'.h($contrato->id_empresa).'</td>';
            }
            ?>
            <td><?= h($contrato->descricao) ?></td>
            <td><?= h($contrato->created) ?></td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>