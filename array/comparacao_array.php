<div class="titulo">Comparação Array</div>
<?php

$arr1 = array('nome'=>'Maria','idade'=>'35');
$arr2 = ['nome'=>'Maria', 'idade'=>'35'];

var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr2);

$arr3 =['nome'=>'Maria', 'idade'=>35];
echo '<br>';
var_dump($arr3 == $arr2); 
echo '<br>';
var_dump($arr3 === $arr2); 
echo '<br>';
var_dump($arr3 !== $arr2); 
echo '<br>';
var_dump($arr3 != $arr2);

$arr4 = ['idade'=>35, 'nome'=>'Maria'];
echo '<br>';
var_dump($arr3 == $arr4);
echo '<br>';
var_dump($arr3 === $arr4);
echo '<br>';
