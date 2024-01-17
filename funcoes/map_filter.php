<div class="titulo">Map & Filter</div>

<?php

$notas = [5.5, 7.2, 8.5, 9.2, 6.8];
$notasFinais1 = [];

foreach($notas as $nota){
    $notasFinais1 [] = round($nota);
}
print_r($notasFinais1);
echo '<br>';

$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

echo '<br>';
$apenasAprovados = [];
foreach($notas as $nota){
    if($nota >= 7 ){
        $apenasAprovados [] = round($nota);
    }
}
print_r($apenasAprovados);
echo '<br>';

function aprovados($nota){
    return $nota >= 7;
}
$notasFinais3 = array_filter($notas, 'aprovados');
print_r($notasFinais3);

echo '<br>';
function calculoLegar($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10? 10: $notaFinal;
}
$notaFinal3 = array_map('calculoLegar', $notas);
print_r($notaFinal3);

