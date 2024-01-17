<div class="titulo">Switch Case</div>

<?php

$categoria = "Luxo";
$preco = 0.0;
$carro = "";

if ($categoria === 'Luxo') {
    $carro = "Mercedes";
    $preco = 250000;
} elseif ($categoria === 'Suv') {
    $carro = "Renegate";
    $preco = 150000;
} elseif ($categoria === 'Sedan') {
    $carro = "Corolla";
    $preco = 100000;
} else {
    $carro = "Mobi";
    $preco = 33000;
}
$precoFormatado = number_format($preco, 2, ',', '.');

echo 'O carro ' . $carro . ' custa R$' . $precoFormatado;
echo '<br>';
$categoria = "Luxo";
switch ($categoria) {
    case 'Luxo':
        $carro = "Mercedes";
        $preco = 250000;
        break;
    case 'Suv':
        $carro = "Renegate";
        $preco = 150000;
        break;
    case 'Sedan':
        $carro = "Corolla";
        $preco = 100000;
        break;
    case 'Utili':
        $carro = "Mobi";
        $preco = 33000;
        break;
}
$precoFormatado = number_format($preco, 2, ',', '.');

echo 'O carro ' . $carro . ' custa R$' . $precoFormatado;