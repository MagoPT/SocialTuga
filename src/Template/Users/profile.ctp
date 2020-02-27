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
        <li><?= h($utilizadore->nome) ?> // <?= h($utilizadore->utilizador) ?></li>
        <li>Idade: <?= $this->Number->format($utilizadore->idade) ?></li>
        <li>Profissão: <?= h($utilizadore->profissao) ?></li>
        <li>Formação: <?= h($utilizadore->formacao) ?></li>
        <li>Morada: <?= h($utilizadore->morada) ?></li>
        <li>Genero: <?= h($utilizadore->genero) ?></li>
        <li>Bio:
        <div class="bio">
        <?= h($utilizadore->bio) ?>
        </div>
        </li>
    </ul>
</nav>
    
</div>
