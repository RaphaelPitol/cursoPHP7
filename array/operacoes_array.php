<div class="titulo">Operações com Array</div>
<?php

$dados1 = array(
    "nome" => "Raphael",
    "idade" => 35
);
$dados2 = array(
    "naturalidade" => "Nova Olimpia",

);
$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br>'. is_array($dadosCompletos);
echo '<br>'. count($dadosCompletos);

echo '<br>';

$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "Idade {$dadosCompletos['idade']} anos";
echo '<br>';
echo "Meu nome é ${dadosCompletos['nome']}";

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
//var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$numeros= $pares + $impares;
print_r($numeros);

echo '<br>';
$numeros = array_merge($pares, $impares);
print_r($numeros);
echo '<br>';

sort($numeros);
echo '<br>';
print_r($numeros);



