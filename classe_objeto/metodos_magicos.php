<div class="titulo">Metodos Magicos</div>

<?php

class Pessoa {
     public $nome;
     public $idade;

    function __construct($nome, $idade){
          echo "Construtor Invocado <br>";
          $this->nome = $nome;
          $this->idade = $idade;
     }

     function __destruct(){
          echo "E Morreu!!";
     }

     public function __toString(){
          return "{$this->nome} tem {$this->idade} anos.";
     }

     public function apresentar(){
          echo $this. "<br>";
     }

     public function __get($atrib){
          echo "Lendo atributo não declarado: $atrib!";
     }

     public function __set($atrib, $valor){
          echo "Tentando setar valor no atributo não declarado:{ $atrib} = {$valor}";
     }

     public function __call($metodo, $param ){
          echo "Tentando acessar metodo '$metodo', ";
          echo "com os parametros:";
          print_r($param);
     }
}

$pessoa = new Pessoa("Raphael", 36);

$pessoa->apresentar();
echo $pessoa, "<br>";

$pessoa->nome = "Pitol";

// acessa o metodo __toString
echo $pessoa;
echo "<br>";

// acessa o metodo __get
$pessoa->sobrenome;
echo "<br>";
// acessa o metodo __set
$pessoa->sobrenome1 = "Raphael";
echo "<br>";

// acessa o metodo __call
$pessoa->exec(1, "Rapha", true, [1, 2, 3, "Pitol"]);
echo "<br>";

// acessa o metodo __destruct
$pessoa = null;