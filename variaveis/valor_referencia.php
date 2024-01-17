<div class="titulo">Valor Vs Referencia </div>

<?php
$variavel = 'valor inicial';

echo $variavel;

//Atribição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor="novo valor";
echo "<br>$variavel";
echo "<br>$variavelValor";
echo "<br>";

//Atribuição por referencia
$variavelValor = &$variavel;
$variavelValor = 'mesma referencia';
echo "<br>$variavel";
echo "<br>$variavelValor";


