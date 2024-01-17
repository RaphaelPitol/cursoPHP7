<div class="titulo">Trait #01</div>

<?php

trait validacao{

     public $a = "Atributo A";
     public function validacaoStr($str){
          return isset($str) && $str !== "";
     }
}

trait validacaoMelhor{
     private $b = "Atributo Privado do Trait";
     public function validacaoStrMelhor($str){
          return isset($str) && trim($str);
     }
}

class User {
     use validacao, validacaoMelhor;

     public function atributo(){
          echo $this->b;
     }
}

$user = new User();

var_dump($user->validacaoStr(" "));
echo "<br>";
var_dump($user->validacaoStrMelhor("P"));
echo "<br>";
echo $user->a;
echo "<br>";
echo $user->atributo();