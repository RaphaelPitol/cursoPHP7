<?php
include_once('arroz.php');
include_once('sorvete.php');
class Pessoa{
     public $peso;

     function __construct($peso){
          $this->peso = $peso;
     }

     public function comer(Comida $comida){
          $this->peso += $comida->peso;
     }

}
