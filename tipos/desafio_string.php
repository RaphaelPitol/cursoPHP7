<div class="titulo">Desafio String</div>



<?php
//Enunciado
/*Avaliando os metodos da documentção da string
    qual o metodo que a posição do texto 'abc'
    na string "AbcaBcabc" retorne 1?*/

$x = "!AbcaBcabc";
echo str_contains($x, "abc");
echo '<br>';
echo strpos($x, "abc");
echo '<br>';
echo stripos($x, 'abc');
echo '<br>';
echo strpos(strtolower($x), strtolower('ABc'));//ignorando maiusculas
