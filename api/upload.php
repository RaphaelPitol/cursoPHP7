<div class="titulo">Upload</div>

<?php
print_r($_FILES);
// print_r($_POST);
// print_r($_GET);

if($_FILES && $_FILES['arquivo']){
     //variavel define o path o caminho que sera salvo o arquivo
     $pastaUpload = '/Users/Raphael/Usuario/Desktop/';
     //variavel pega o nome do arquivo carregado
     $nomeArquivo = $_FILES['arquivo']['name'];
     //variavel define o caminho  para salvar o arquivo
     $arquivo = $pastaUpload . $nomeArquivo;

     $tmp = $_FILES['arquivo']['tmp_name'];
     //funcao move_uploaded_file pega o caminho temporario e substitui 
     //pelo caminho onde sera salvo o arquivo.
     if(move_uploaded_file($tmp, $arquivo)){
          echo "<br>Arquivo válido e enviado com sucesso";
     }else{
          echo "<br>Erro no upload de arquivo";
     }
}

?>

<form action="#" method="post" enctype="multipart/form-data">
     <input name="arquivo" type="file">
     <button>Enviar</button>

</form>

<style>
     input,button{
          font-size: 1.2rem;
     }
</style>