<div class="titulo">Desafio Break Continue</div>
<!--
    Enunciado:
    -Imprima apenas os valores do array que contenha o indice par
    -Resolva utilisando o for e o foreach
    -Valores esperados : AAA, CCC, EEE
-->


<?php
$array = [
    'AAA',
    'BBB',
    'CCC',
    'DDD',
    'EEE',
    'FFF',
    'GGG'
];

foreach($array as $a => $b){
    if(($a % 2 === 1)) continue;
        echo $b.'<br>';
    
}
echo '<hr>';

for($i = 0; $i < count($array); $i++){
    if(($i % 2 !== 0))continue;
        echo $array[$i].'<br>';
    
}