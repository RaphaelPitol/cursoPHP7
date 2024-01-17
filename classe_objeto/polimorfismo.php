<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
     public $peso;
}

class Arroz extends Comida{

}

class Sorvete extends Comida{

}

class Carne extends Comida{

}

class Pessoa {
     public $peso;

     public function __construct($peso){
          $this->peso = $peso;
     }

     //utilizamos o polimorfismo da classe Comida
     // mas tambem poderia usar direto o parametro $comida
     public function comer(Comida $comida){
          $this->peso += $comida->peso;
     }
}

$c1 = new Arroz();
$c1->peso = 0.50;

$p = new Pessoa(76);

$p->comer($c1);

$c2 = new Sorvete();
$c2->peso = 1.50;

$p->comer($c2);

echo $p->peso;