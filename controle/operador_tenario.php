<div class="titulo">Operador Ternario</div>

<?php

$idade = 17;
$status;

if($idade >=18){
    echo '<br>Maior de Idade';
}elseif($idade < 18){
    echo '<br>Menor de idade';
}

$idade = 19;
$status = $idade >=18 ? 'Maior de idade': 'Menor de Idade';
echo '<br>'.$status;

$idade = 66;
$status = $idade >=18 ? $idade >= 65? 'Aposentado': 'Maior' : 'Menor';
echo '<br>'.$status;
