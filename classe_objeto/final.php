<div class="titulo">Final</div>

<?php

abstract class Abstrata{
     public abstract function metodo1();

     public final function metodo2(){
          echo "Não posso ser modificado!";
     }
}

class Classe2 extends Abstrata{
     public function metodo1(){
          echo "Executando metodo 1 <br>";
     }

     // public function metodo2(){
     //      echo "Alterando metodo final <br>";
     // }
}

$classe = new Classe2();
$classe->metodo1();
$classe->metodo2();