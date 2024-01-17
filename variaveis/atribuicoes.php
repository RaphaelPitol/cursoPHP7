<div class="titulo">Atribuições</div>

<?php

$numero = 10;
echo $numero,'<br>';
$numero = $numero - 3;
echo $numero,'<br>';
$numero = $numero + 1.5;
echo $numero,'<br>';

$numero--;
echo $numero,'<br>';
--$numero;
echo $numero,'<br>';
$numero++;
echo $numero,'<br>';
++$numero;
echo $numero,'<br>';
$numero += 5;
echo $numero,'<br>';
$numero /= 5;
echo $numero,'<br>';
$numero .= 10;  //concatena o 10 a variavel
echo $numero,'<br>';

$texto = "Esse é um texto";
echo $texto,'<br>';
$texto = $texto . ' Qualquer';
echo $texto,'<br>';
$texto .= " de verdade!";
echo $texto,'<br>';

//$variavelInesistente = 'Valor existente';

echo '<br>' . $variavelInesistente;
//var_dump($variavelInesistente);
$valor = $variavelInesistente ?? 'valor default';

echo '<br>', $valor;
