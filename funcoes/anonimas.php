<div class="titulo">Funções Anonimas</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};
echo $soma(3, 2) . '<br>';


$multiplicacao = function ($a, $b){
    return $a * $b;
};
function executar2($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>"; 
}
function dividir($a, $b){
    return $a / $b ;
}
 executar2(4, 5, '+', $soma);
 executar2(4, 5, '*', $multiplicacao);
 

 function executar($a, $b, string $op)
 {
     switch ($op) {
         case '+':
             echo "Soma de $a + $b =";
             return $a + $b . '<br>';
         case '*':
             echo "Multiplicação de $a * $b =";
             return $a * $b. '<br>';
         case '-':
             echo "Subtração de $a - $b =";
             return $a - $b. '<br>';
         case '/':
             echo "Divisão de $a / $b =";
             return $a / $b. '<br>';
         default:
     }
 }
 
 echo executar(3, 3, '+');
 echo executar(3, 3, '*');
 echo executar(3, 3, '-');
 echo executar(3, 3, '/');
