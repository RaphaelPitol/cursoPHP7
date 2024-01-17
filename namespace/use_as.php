<?php namespace Outro\Nome; ?>
<div class="titulo">Use - As</div>

<?php

echo __NAMESPACE__.'<br>';

include('use_as_arquivo.php');

function soma($a, $b){
     return $a . $b; // Somente para diferenciar as finções
}

class Classe{
     public $var;
     function func(){
          echo __NAMESPACE__.'->'. __CLASS__.
          '->'.__METHOD__. '<br>';
     }
}

//Para ter acesso a constante precisa colocar o \ antes do Nome
echo \Nome\Bem\Grande\constante. '<br>';

use const Nome\Bem\Grande\constante;

echo constante. '<br>';

//neste momento estamos dando um apelido para o 
//caminho do namespace abaixo
use Nome\Bem\Grande as ctx;

echo soma(1, 2) . '<br>';

echo ctx\soma(1, 2). '<br>';

// desta forma teremos um conflito de nomes de funções
// usando o 'as' damos um apelido para a função com mesmo nome
// acessando assim pelo seu apelido.
// use function Nome\Bem\Grande\soma;
use function Nome\Bem\Grande\soma as somaReal;

echo somaReal(100, 212). '<br>';

//aqui estamos instanciando a Classe deste arquivo
$a = new Classe();
$a->func();

//aqui estamos instanciando a Classe do outro namespace conforme caminho descrito
$b = new \Nome\Bem\Grande\Classe();
$b->func();

echo '<br>';

//aqui damos um apelido para a classe no namespace.
use \Nome\Bem\Grande\Classe as novaClasse;
$b = new novaClasse();
$b->func();

echo '<br>';
// aqui usamos o apelido do caminho para acessar a Classe 
//do namespace
$c = new ctx\Classe();
$c->var = "Raphael";
$c->func();
echo $c->var;


