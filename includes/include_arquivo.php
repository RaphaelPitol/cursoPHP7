<?php

echo "O Include foi chamado <br>";

$variavel = "Valor da Variavel";

if(!function_exists('soma')){
     function soma($a, $b){
          return "Resultado da soma=". $a + $b;
     }
}


