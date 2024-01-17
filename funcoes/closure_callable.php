<div class="titulo">Closure & Callable</div>

<?php
/**este é um objeto do tipo closure que possui uma função anonima */
$soma = function($a, $b){
    return $a + $b;
};

function soma1($a, $b){
    return $a + $b;
}

echo $soma(5, 5).'<br>';
/**Callable é uma função ou objeto que pode ser chamado */
echo (is_callable($soma)? "Sim": "Não").'<br>';

var_dump($soma);

