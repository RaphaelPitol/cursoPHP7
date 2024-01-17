<?php namespace contexto;

use A;

 ?>

<div class="titulo">Exemplo Basico</div>

<?php

echo __NAMESPACE__."<br>";

const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__.'\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1.'<br>';
echo constante2.'<br>';
//echo contexto\constante3. '<br>';
// echo \contexto\constante3. '<br>';
echo constant(__NAMESPACE__.'\constante3'). '<br>';

echo \outro_contexto\constante4. '<br>';

function soma($a, $b){
     return $a + $b;
}

echo \contexto\soma(5, 2).'<br>';
echo soma(5, 2).'<br>';

function strpos($str, $text){
     echo "Buscando o texto '{$text}' em '{$str}' <br>";
     return 1;
}
//resolução de conflitos de nomes da propria api

// pegando a função do nosso namespace
echo strpos('Texto genérico para busca', 'busca'). '<br>';

//buscadoo a função strpos da api do php
echo \strpos('Texto genérico para busca', 'busca'). '<br>';