<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata {
     abstract public function metodo1();
     protected abstract function metodo2($parametros);
}

abstract class FilhaAbstrata extends Abstrata{

     public function metodo1(){
          echo "Executando metodo 1 <br>";
     }

     abstract public function metodo3();
}

class Concreta extends FilhaAbstrata{
     public function metodo1(){
          echo "Executando metodo 1 extendido <br>";

          //o parent executa o metodo que esta dentro da classe abstrata
          parent::metodo1();
     }
     protected function metodo2($parametros){
          echo "Executando metodo 2 $parametros <br>";
     }

     public function metodo3(){
          $this->metodo2(" dentro da classe somente");
          echo "Executando metodo 3";
     }
}

$c = new Concreta;
$c->metodo1();
$c->metodo3();