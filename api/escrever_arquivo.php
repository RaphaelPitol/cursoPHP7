<div class="titulo">Escrever Arquivo</div>

<?php
//fopen função para abrir o arquivo
// 'w' mode que ira criar o arquivo ou abrir neste caso modo de escrita
$arquivo = fopen('teste.txt', 'w');

fwrite($arquivo, "Valor Inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteudo");
fclose($arquivo);

// a flag 'a' apend não sobre-escreve o arquivo mas acrescenta mais informações
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionado em um segundo momento\n");
fclose($arquivo);

ini_set('display_errors', 1);
// a flag X garante que o arquivo seja unico se existir da um warning.
$arquivo = fopen('teste.txt', 'x');

