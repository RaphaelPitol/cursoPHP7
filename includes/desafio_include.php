<div class="titulo">Desafio Include</div>
/*
A ideia desse desafio seria criar uma classe abstrata
incluir em classe que erda e instanciar 

Eu criei uma classe abstrata Comida criei duas class Arro e sorvete que erdão desta 
classe peso e nome e atravez do include coloquei no arquivo Pessoa 
aqui fiz as instancias dos objetos.
*/
<br>
<?php
include_once('pessoa.php');

$p = new Pessoa(76);
echo "Peso inicial =$p->peso <br>";

$c = new Arroz();
$c->peso = 0.50;

$p->comer($c);
echo "Peso atual =$p->peso  <br>";

$c2 = new Sorvete;
$c2->peso = 1;

$p->comer($c2);
echo "Peso atual =$p->peso  <br>";