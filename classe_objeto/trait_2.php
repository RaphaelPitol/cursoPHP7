<div class="titulo">Trait #02</div>

<?php

trait validacao{
     public function validarString($str){
          return isset($str) && $str !== "";
     }
}

trait validacaoMelhor{

     public function validarString($str){
          return isset($str) && trim($str);
     }
}

class Traits {
     use validacao, validacaoMelhor{
          validacaoMelhor::validarString insteadOf validacao;

          validacao::validarString as validacaoSimples;
     }
}

$trait = new Traits();

var_dump($trait->validarString(""));
echo "<br>";

var_dump($trait->validacaoSimples(" "));