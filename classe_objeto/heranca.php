<div class="titulo">Herança</div>

<?php

class Pessoa {
     public $nome;
     public $idade;

     function __construct($nome, $idade){
          $this->nome = $nome;
          $this->idade = $idade;

          echo "{$nome} e tenho {$idade} anos<br>";
     }

     function __destruct(){
          echo "Pessoa diz tchauuu!<br>";
     }

     public function apresentar (){
         echo "{$this->nome}, e {$this->idade} anos.<br>";
     }
}

class Usuario extends Pessoa{
     public $login;

     function __construct($login, $nome, $idade){
          // $this->nome = $nome;
          // $this->idade = $idade;
          parent::__construct($nome, $idade);
          $this->login = $login;

          echo "Usuario Criado <br>";
     }
     function __destruct(){
          echo "Usuario diz tchauuu!<br>";
     }

     public function apresentar (){
          echo "Login: {$this->login} ";
          //parent chama a função da classe pai e executa 
          parent::apresentar();
      }
}


$pessoa = new Pessoa("Raphael", 35);

$usuario = new Usuario("@rapha", "Raphael", 36);

$usuario->apresentar();


unset($pessoa);