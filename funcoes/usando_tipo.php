<div class="titulo">Usando Tipo</div>

<?php

function soma($a, $b){
    echo "Soma de $a + $b = ";
    return $a + $b;
}

echo soma(5, 5).'<br>';
echo soma(5.3, 5.2).'<br>';
echo soma(1, '4dois');
echo '<br>';
echo '<br>';
function soma1(int $a, int $b){
    echo "Soma de $a + $b = ";
    return $a + $b;
}
echo soma1(5, 5).'<br>';
echo soma1(5.3, 5.2).'<br>';
echo soma(1, '4dois');
echo '<br>';
echo '<br>';

function soma2($a, $b): int{
    echo "<span>Soma de $a + $b =</span>";
    return $a + $b;
}
echo soma1(5, 5).'<br>';
echo soma1(5.3, 5.2).'<br>';
echo soma(1, '4dois');
/** funções declarando os tipos das variaveis podem
 * ter resultados diferentes muito cuidado quando usar desta forma.
 */