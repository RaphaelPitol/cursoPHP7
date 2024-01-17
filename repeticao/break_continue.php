<div class="titulo">Break - Continue</div>
<?php

$cont = 16;
for(; ;){
    if($cont <= 20){
        echo $cont.'<br>';
        $cont++;
    }else{
        break;
    }
}
echo '<hr>';

for(;;){
    $cont++;
    if($cont % 2 == 0)continue;
    echo $cont.'<br>';
    if($cont >=30)break;
}
echo '<hr>';

foreach(array(1, 2, 3, 4, 5, 6) as $n){
    if($n === 5)break;
    if($n %2 === 0)continue;
    echo "$n <br>";
}