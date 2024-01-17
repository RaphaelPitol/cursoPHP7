<div class="titulo">Argumentos Variaveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}

/** desta forma a função somente ira 
 * pegar os dois primeiros argumentos passados
 */
echo soma(10, 12,).'<br>';

/** aqui usando a notação de 3 pontos conseguimos inserir
 * varios argumentos na função
 * a variavel se torna um array de args
 * que é necessario usar um foreach para acessar os valores.
 */
function somaInterira(...$numeros){
    print_r($numeros);
    echo '<br>';
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}
echo somaInterira(1, 5, 5).'<br>';

$array = array(6, 8, 9);
/** desta forma lança um array dentro do outro
 * e precisamos usar a notação (...)
 * que extrai os valores da variavel $array e colocar como
 * argumentos na função.
 */
echo somaInterira(...$array).'<br>';

function membros($titular, ...$dependentes){
    echo 'Titular: '.$titular.'<br>';
    foreach($dependentes as $dep){
        echo 'Dependentes: '.$dep.'<br>';
    }
}
membros("Raphael");

membros("Raphael", "Heloisa", "Leonardo");
?>
