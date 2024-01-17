<div class="titulo">Include Funcoes</div>

<?php

echo "Chamando o include dentro de uma função <br>";

function carregandoArquivo()
{
     include("include_arquivo.php");

     echo $variavel, "<br>";

     echo soma(10, 10);
}

carregandoArquivo();

echo "<br>";
// a variavel que vem de um include dentro de uma função 
// não pode ser acessada.
echo "Variavel:", $variavel;
var_dump($variavel);

echo "<br>";
// a Função soma conseguimos acessar do include
echo soma(25, 50);
