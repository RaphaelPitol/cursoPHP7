<?php namespace Usuario;

include('pessoa.php');

use \Pessoa\Pessoa as pessoa;
class Usuario extends pessoa{
     public bool $nivel;

     function __construct($nome, $idade, $nivel){
          $this->nivel = $nivel;
          $this->nome = $nome;
          $this->idade = $idade;
     }

     public function status(){
          if($this->nivel == true){
               echo "Sou patrão <br>";
          }else{
               echo "Sou funcionario <br>";
          }
     }
}

$p = new Usuario("Raphael", 36, true);


$p->apresentar();
$p->status();

