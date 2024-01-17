<div class="titulo">Membros Estaticos</div>

<?php

class A{
     public $naoStatic = "Variavel de instancia";
     public static $static = "Variavel de Class (statica)";


     public function mostraA(){
          echo "Não statica = {$this->naoStatic}<br>";
          //Tentativa 1
          // echo "Estatica = {$this->static}<br>";
          //Tentativa 2
          // echo "Estatica = {self::$static}<br>";
          
          //Para mostrar uma variavel static usamos p self::variavel
          echo "Estatica = " . self::$static . "<br>";
     }
     
     public static function mostrarStaticaA(){
          //o $this não esta disponivel dentro de uma função static
          // echo "Não Statico = {$this->naoStatic}";
          echo "Estatica = " . self::$static . "<br>";
     }
}



$a = new A();

$a->mostraA();

//não é a forma idela porque da impressão que a função
//é de uma variavel de instancia.
$a->mostrarStaticaA();

echo "<br>";

//O metodo correto de acessar uma função static
//á apartir da Class diretamente usando os ::
//podendo assim acessar o metodo sem necessariamente instanciar a classe.
A::mostrarStaticaA();//acessa diretamente pela Classe
echo A::$static ."<br>";//acessa diretamente pela Classe