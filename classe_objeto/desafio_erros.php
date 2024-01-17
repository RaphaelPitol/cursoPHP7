<div class="titulo">Desafio 7 Erros</div>

<?php
// /**
// Objetivo do desafio é concertar o codigo a baixo
// */

// interface Template{
//      function metodo1();
//      public function metodo2($parametro);
// }

// abstract class ClassAbstrata extends Template{
//      public function metodo3(){
//           echo "Estou funcionando";
//      }
// }

// class Classe implements ClasseAbstrata {
//      function __construct($parametro){

//      }
// }

// $exemplo = Classe();
// $exemplo.metodo3();

interface Template{
     function metodo1();
     public function metodo2($parametro);
}

abstract class ClassAbstrata implements Template{
 
     public function metodo3(){
          echo "Estou funcionando";
     }
}

class Classe extends ClassAbstrata {
     public function metodo1(){
          echo "Executando metodo1 <br>";
     }
     public function metodo2($parametro){
          echo "Executando metodo2 $parametro <br>";
     }
     function __construct($parametro){

     }
}

$exemplo = new Classe("Executado");
$exemplo->metodo1();
$exemplo->metodo2("com parametros");
$exemplo->metodo3();