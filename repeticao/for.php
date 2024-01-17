<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++){
    echo $cont.'<br>';
}
echo'<hr>';

for(; $cont <= 10; $cont++){
    echo $cont.'<br>';
}
echo'<hr>';

for(; $cont <= 15;){
    echo $cont.'<br>';
    $cont++;
}
echo'<hr>';

$array = [1 =>'Domingo', 'Segunda', 'Terça', 
'Quarta', 'Quinta', 'Sexta', 'Sabado'];

for($i = 0; $i <= count($array); $i++){
    echo "$i {$array[$i]}<br>";
}
echo'<hr>';

$matri =[
    ['a','b','c', 'd',],
    ['a','e','i','o','u'],
    ['1','2','3','4','5']
];

for($i = 0; $i <= count($matri); $i++){
   for($j = 0; $j <= count($matri[$i]); $j++){
    echo "{$matri[$i][$j]}";
   }
   echo '<br>';
}

