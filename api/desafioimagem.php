<div class="titulo">Desafio Imagem</div>

<p>Idéia do desafio fazer com que seja carregado somente
     arquivos de imagem!
</p>

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
     <?php foreach ($arquivos as $arquivo) {

          $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
          $extensoesDeImagem = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
          if (in_array(strtolower($extensao), $extensoesDeImagem)) {
     ?>
               <li>
                    <img src="../files/<?= $arquivo ?>" height="120">
               </li>
               <p><?= $extensao ?></p>

          <?php
          } else {
          ?>
          <p>Não é imagem!</p>
     <?php
          }
     }
     ?>


</ul>

<style>
     input,
     button {
          font-size: 1.2rem;
     }
</style>