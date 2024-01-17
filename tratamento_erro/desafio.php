<div class="titulo">Desfio</div>

<?php

include('desafio_intdiv.php');

use function \Aritmetica\intdiv;

try {
    echo \Aritmetica\intdiv(8, 3). '<br>';
} catch (\Aritmetica\NaoInteiroException $e) {
     echo "Resultado não é um numero inteiro <br>";
}

try {
    echo intdiv(8, 0). '<br>';
} catch (DivisionByZeroError $e) {
     echo "Divisão por Zero <br>";
}

echo intdiv(8, 2).'<br>';
echo \intdiv(8, 2).'<br>';
echo \intdiv(8, 3).'<br>';





