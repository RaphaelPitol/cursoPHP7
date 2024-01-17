<?php namespace Pessoa;

abstract class Pessoa{
     public $nome;
     public $idade;

     function __construct($nome, $idade){
          $this->nome = $nome;
          $this->idade = $idade;
     }

     public function apresentar(){
          echo "Ola eu sou $this->nome e tenho $this->idade anos!<br>";
     }
}