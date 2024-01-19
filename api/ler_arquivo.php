<div class="titulo">Ler Arquivo</div>

<?php
// a flag 'r' modo de leitura
$arquivo = fopen('teste.txt', 'r');
//fread() lendo o arquivo por byts
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';
$arquivo = fopen('teste.txt', 'r');
//filesize() pega o tamanho do arquivo
$tamanho = filesize('teste.txt');
echo $tamanho."<br>";
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';
$arquivo = fopen('teste.txt', 'r');
//fgets() faz a leitura linha por linha
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
fclose($arquivo);

echo '<hr>';
//lendo linha por linha atraves do while 
// com o feof que verifica o fim do arquivo
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
     echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';
//lendo caracter por caracter atraves do while e fgetc() 
// com o feof que verifica o fim do arquivo
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
     echo fgetc($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';
//opção para ler e alterar o arquivo ao mesmo tempo
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionando durante a leitura");
fclose($arquivo);

