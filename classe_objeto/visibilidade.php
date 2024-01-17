<div class="titulo">Visibilidade</div>

<?php

class A {
     public $publico = "Publico";
     protected $protegido = "Protegido";
     private $privado = "Privado";

     public function mostrarA(){
          echo "Classe a) Publico = {$this->publico}<br>";
          echo "Classe a) Protegido = {$this->protegido}<br>";
          echo "Classe a) Privado = {$this->privado}<br>";
     }

     private function naoMostrar(){
          echo "Não vou imprimir";
     }
}

$a = new A();
$a->mostrarA();

class B extends A {
     public function mostrarB(){
        echo "Classe B) Publico = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        //privado somente pode ser acessado dentro da classe!
        echo "Classe B) Privado = {$this->privado}<br>";
     }
}

echo "<br>";
$b = new B();

$b->mostrarB();
echo "<br>";