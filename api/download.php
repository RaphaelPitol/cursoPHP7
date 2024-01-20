<div class="titulo">Download</div>

<?php
session_start();

//salva a sessão arquivo na variavel
$arquivos = $_SESSION['arquivos'] ?? [];

// define o path 
$pastaUpload = __DIR__ . '/../files/';
//pega o nome do arquivo carregado
$nomeArquivo = $_FILES['arquivo']['name'];
//pega o path com o nome do arquivo montando o caminho pra salvar
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
     echo "<br>\Arquivo válido e enviado com sucesso.";
     //salva o nome do arquivo dentro do array
     $arquivos[] = $nomeArquivo;
     $_SESSION['arquivos'] = $arquivos;
} else {
     echo "<br>ERRO NO UPLOAD DE ARQUIVOS";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
     <input name="arquivo" type="file">
     <button>Enviar</button>
</form>

<ul>
     <?php
     foreach ($arquivos as $arquivo) {
     ?>
          <li>
               <a href="../files/<?= $arquivo ?>">
                    <?= $arquivo ?>
               </a>
          </li>
     <?php
     }
     ?>
</ul>

<style>
     input,button{
          font-size: 1.2rem;
     }
</style>