<div class="titulo">Retornando Função</div>
<?php

function soma($a){

    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(5)(4)."<br>";

$doisMais = soma(2);
echo $doisMais(5)."<br>";
echo $doisMais(50)."<br>";

