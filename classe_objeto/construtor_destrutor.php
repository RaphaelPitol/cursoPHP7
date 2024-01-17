<div class="titulo">Constructor e Destructor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade = 30){
     echo("Construido<br>");
     $this->nome =  $nome;
     $this->idade = $idade;
    }

    function __destruct(){
     echo ("Morreuuuuu!<br>");
    }

    function apresentar(){
     echo("Ola sou {$this->nome} e tenho {$this->idade} anos!<br>");
    }
}

$pessoa = new Pessoa("Raphael");

$pessoa->apresentar();

unset($pessoa); //assim chama o destructor

$pessoa = new Pessoa("Raphael", 36);

$pessoa->apresentar();

$pessoa = null;// desta forma tambem chama o destructor

$pessoa = new Pessoa("Leonardo Chorão", 10);

$pessoa->apresentar();
unset($pessoa);
?>