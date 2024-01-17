<div class="titulo">Equação</div>

<?php 
$numeradorA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;
$ladoA = $numeradorA / $denA;

$numeradorB = (1 - 5)*(2- 7);
$denB = 2;
$ladoB = ($numeradorB / $denB) ** 2;

$totNumerador = ($ladoA - $ladoB) ** 3;
$denominador = 10 ** 3;

$resultado = $totNumerador / $denominador;

Echo 'Resultado da Equação ', $resultado,'.';