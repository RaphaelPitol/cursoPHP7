<div class="titulo">Argumentos da Função e retorno</div>

<?php
function mensagem(){
    return 'Ola Raphael';
}

$m = mensagem();
echo $m;

function mensagemNome($nome){
    return "Ola Sr $nome";
}
echo "<br>", mensagemNome("Raphael");
echo "<br>", mensagemNome("Leonardo");

function soma($a, $b){
    if($a > 5){
        return $a + $b;
    }else{
        return $a * $b;
    }
}

echo "<br>", soma(6 , 5);

$variavel = 1;
function trocaValor($a , $novoValor){
    $a = $novoValor;
}

trocaValor($variavel, 5);

echo "<br>$variavel";
/*o & significa passar o valor por referencia*/
function trocaValorVerdade(&$a , $novoValor){
    $a = $novoValor;
}
trocaValorVerdade($variavel, 5);
echo "<br>$variavel";