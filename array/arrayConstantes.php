<div class="titulo">Array Constantes</div>
<?php

$frutas = array('Laranja', 'Banana');
echo $frutas[1];
echo '<br>';
$frutas[]="Limão";
print_r($frutas);
echo '<br>';

const house = ['Casa', 'Apartamento'];
print_r(house);

const CARROS = ['Fiat'=> 'Uno', 'Ford'=>'Fiesta'];
echo '<br>'. CARROS["Fiat"];

define('CIDADE',array('Belo Horizonte'));
echo '<br>';
print_r(CIDADE);
