<div class="titulo">Include_Once</div>

<?php
ini_set('display_errors', 1);

include(__DIR__.'/include_once_arquivo.php');
require(__DIR__.'/include_once_arquivo.php');

echo "Variavel = '{$variavel}'. <br>";
$variavel = "Variavel alterada";
echo "Variavel = '{$variavel}'. <br>";


include(__DIR__.'/include_once_arquivo.php');
echo "Variavel = '{$variavel}'. <br>";
$variavel = "Variavel alterada";
echo "Variavel = '{$variavel}'. <br>";

// o include_once e require_once garante que o arquivo seje  
// carregado somente uma vez mantendo os valores
// da variavel se ela tenha sido alterada em algum momento.
include_once(__DIR__.'/include_once_arquivo.php');
echo "Variavel = '{$variavel}'. <br>";

require_once(__DIR__.'/include_once_arquivo.php');
echo "Variavel = '{$variavel}'. <br>";

