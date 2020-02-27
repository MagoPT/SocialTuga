<style>
body{
    background-color:#0d0d0d;
    color:white;

}
.profile{
    color:black;
}
.profile img {
    clip-path: circle(55px at center);
    vertical-align: middle;
}
.bio{
    background-color: #4d4d4d;
}
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav profile">
        <li class="heading"><?= __('Perfil') ?></li>
        <li><img src="https://i.ibb.co/JkmBRrw/bigger.jpg" alt="profilePic" > </li>         
        <li><?= h($user->nome) ?> // <?= h($user->utilizador) ?></li>
        <li>Idade: <?= $this->Number->format($user->idade) ?></li>
        <li>Profissão: <?= h($user->profissao) ?></li>
        <li>Formação: <?= h($user->formacao) ?></li>
        <li>Morada: <?= h($user->morada) ?></li>
        <li>Genero: <?= h($user->genero) ?></li>
        <li>Bio:
        <div class="bio">
        <?= h($user->bio) ?>
        </div>
        </li>
    </ul>
</nav>
    
</div>

<div class"publicacoes">

<?= $this->element('publicacoes_perfil',[
    'tipo' => 'id_utilizador', //Esta variavel é importante pois vai mos permitir utilizar o mesmo element para varios posts
    'id_utilizador' => $users->id_utilizador,  //Id do utilizador que vai ser usado para mostrar apenas os contratos realtivos a ele
    'limite' => '4', //Limite de quantos contratos iremos mostrar ao utilizador
    ])
    ?>
    
</div>