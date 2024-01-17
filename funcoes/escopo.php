<div class="titulo">Funções e Escopo</div>

<?php

function imprimirMsg(){
    echo "Ola Dev!";
    echo "Como Vai?<br>";
}

imprimirMsg();
imprimirMsg();
imprimirMsg();

$variavel = 1;

function trocarvalor(){
    $variavel = 2;
    echo "O valor da Variavel é: $variavel";
}
echo "Antes da função a variavel é $variavel<br>";
trocarvalor();
echo "<br>Deposi da função é $variavel<br>";

function trocadeverdade(){
    global $variavel;
    $variavel= 5;
    echo "A variavel nova é $variavel";
}
echo "<br>Antes da função a variavel é $variavel<br>";
trocadeverdade();
echo "<br>Deposi da função é $variavel<br>";
echo "<br>";
var_dump(trocadeverdade());

