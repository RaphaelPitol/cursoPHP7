<div class="titulo">Desafio For</div>

<!--
    imprimir na tela o seguinte desafio;
    #
    ##
    ###
    ####
    #####
-->


<?php
$array = ['#','##','###',"####","#####"];
for($i = 0; $i <= count($array); $i++){
    echo "{$array[$i]}<br>";
}
echo '<hr>';
$impressao = '';
for($cont = 1; $cont <= 5; $cont++){
    $impressao .= "#";
    echo $impressao .'<br>';
}
echo '<hr>';
for($impressao2 = '#'; $impressao2 != '######'; $impressao2 .= "#"){
    echo $impressao2. '<br>';
}
