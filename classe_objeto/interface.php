<div class="titulo">Interface</div>

<?php

interface Animal{
     function respirar();

   
}

interface Canino extends Animal{
     function latir(): string;
     function andar();
}

class Cachorro implements Animal, Canino{
     function respirar(){
          return "Preciso de oxigenio";
     }
     function latir(): string{
          return "Au au";
     }

     function andar(){
          return "Correndo";
     }
}

$animal1 = new Cachorro();

echo $animal1->respirar() ."<br>";
echo $animal1->latir()."<br>";
echo $animal1->andar()."<br>";