<!DOCTYPE html>
<html lang="pt_PT">
<head>
  <title>Funcionalidade Publicações</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
    text-align: center
}
</style>
<body> 
 
<div style="width: 40%">
  <h2>Publicações</h2>
  <div class="panel panel-default">
    <div class="panel-body">
        <div class="perfilPubTOP" style="align-items: flex-start;display: flex;">
            
            <img class="estiloIMG" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/ITunes_12.2_logo.png/600px-ITunes_12.2_logo.png">
            <div class="alinhado">
                <div>Nome Pessoa</div>
                <div class="transparente">Ontem</div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">...
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">Ola</a></li>
                        <li><a tabindex="-1" href="#">Adeus</a></li>
                    </ul>
                </div>
            </div>        
        </div>
        <hr>
        <div class="pubStyle">
        O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum. 
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
  
</div>

</body>
</html>
ola
