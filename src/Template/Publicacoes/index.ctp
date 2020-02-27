<style>
body {
    font-size: 16px;
    font-family: Noto Sans, sans-serif;
    font-variant: normal;
}
.perfilPubTOP {
    display: inline-flex;
}
.estiloIMG {
   border-radius: 50%;
   max-width: 40px;
   max-height: 40px;
}
.transparente{
    opacity: 80%
}
.alinhado{
    flex-grow: 1;
    margin-left: 10px;
}
.pubStyle {
    margin-top: 10px;
    text-align: left;
    font-size: 16px
}
hr {
    border-top: 1px solid gray;
    opacity: 60%
}
.alignCenter {
    text-align: center;
    color: white;
}
.margin {
    margin-bottom: 10px
}
</style>
<body> 
 
<div>
  <h2><?= __('Publicações') ?></h2>
  <button class="btn margin"><?= $this->Html->link(__('Criar publicação'), ['action' => 'add']) ?></button>
  <?php foreach ($publicacoes as $publicacao): ?>
  <div class="panel panel-default">
    <div class="panel-body">
        <div class="perfilPubTOP" style="align-items: flex-start;display: flex;">
            
            <img class="estiloIMG" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/ITunes_12.2_logo.png/600px-ITunes_12.2_logo.png">
            <div class="alinhado">
                <div><?= $publicacao->titulo ?></div>
                <div class="transparente">Ontem</div>
            </div>
            <div>
                <?= $this->Form->postLink(
                    'Apagar publicação',
                    ['action' => 'delete', $publicacao->id_publicacao],
                    ['confirm' => 'Tem certeza que quer apagar a publicação?'])
                ?>
            </div>        
        </div>
        <hr>
        <div class="pubStyle">
            <?= $publicacao->descricao ?>
        </div>
        <hr>
        <div class="alignCenter">
            <div class="col-md-6">
                <button class="btn"><i class="far fa-thumbs-up"> Gosto</i></button>
            </div>
            <div class="col-md-6">
                <button class="btn"><i class="far fa-comments"> Comentar</i></button>
            </div>
        </div>
    </div>
  </div>
  <?php endforeach; ?>
  
</div>

</body>
</html>