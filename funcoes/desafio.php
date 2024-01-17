<div class="titulo">Desafio Palindromo</div>
<?php
/*desafio para saber se uma string é um palindromo
uma palavra que lida de traz pra frente é igual lida de fente 
pra traz*/
$nome = "AraRA";
$str = $nome[0];
echo $str;
$str = $nome[1];
echo $str;
$str = $nome[2];
echo $str.'<br>';
echo strrev($nome);
$nome = strtoupper($nome);
/*essa foi a forma que euu fiz  usando o toupper para transformar todas as
letras maiusculas para fazer a comparação*/
function palindromo(&$nome){
    if($nome === strrev($nome)){
        echo "<br> È um palimdromo";
        echo "<br>$nome";
    }else{
        echo"<br>Não é igual um palimdromo";
    }
}
palindromo($nome);


function palindromoComFor($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}
echo '<br><br>';

echo palindromoComFor("ana").' ';
echo palindromoComFor("arara").' ';
echo palindromoComFor("ababa").' ';
echo palindromoComFor("bola").' ';
echo '<br>';


function palindromoSimples($palavra){
    return $palavra === strrev($palavra)? "Sim": "Não";
}
echo palindromoSimples("ana").' ';
echo palindromoSimples("arara").' ';
echo palindromoSimples("ababa").' ';
echo palindromoSimples("bola").' ';
?>