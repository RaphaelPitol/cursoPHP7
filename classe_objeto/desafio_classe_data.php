<div class="titulo">Desafio Classe Data</div>

<?php

class Data
{
     public $dia;
     public $mes;
     public $ano;

     function apresentarData()
     {
          echo ("A data é {$this->dia}/{$this->mes}/{$this->ano}");
     }
}
$d1 = new Data();
$d1->dia = "01";
$d1->mes = "01";
$d1->ano = "1970";

$d1->apresentarData();

?>