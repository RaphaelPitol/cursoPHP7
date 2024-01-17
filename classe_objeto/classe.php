<div class="titulo">Primeira Classe</div>

<?php
class Cliente
{
     public $nome = 'Anonimo';
     public $idade = 18;

     public function apresentar()
     {
          echo ("Nome: {$this->nome} Idade : {$this->idade}<br>");
     }
}

$c1 = new Cliente();
$c1->nome = "Raphael";
$c1->apresentar();

$c2 = new Cliente();
$c2->nome = "Cilene";
$c2->idade = 36;
$c2->apresentar();

?>