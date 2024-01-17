<div class="titulo">Operadores Relacionais</div>
<style>
p {
   margin-bottom: 0px;
}
hr{
    margin-top: 0px;
}
</style>

<?php
var_dump(1 < 1); //false
echo '<br>';
var_dump(1 > 1);//false
echo '<br>';
var_dump(1 >= 1);//true
echo '<br>';
var_dump(1 <= 10);//true
echo '<br>';
var_dump(1 <> 10);//true  diferente de 
echo '<br>';
var_dump(1 != 10);//true  diferente de 

var_dump(11 == "11");//true
var_dump(11 === "11");//false
var_dump(11 != "11");//false
var_dump(11 !== "11");//true

echo "<p>Relacionais no If/Else</p><hr>";

$idade = 15;
if($idade < 18){
    echo "Menor de idade = $idade anos!";
}else if($idade <= 65){
    echo "Adulto idade = $idade anos!";
}else{
    echo "Terceira idade = $idade anos!";
}

echo "<p>Spaceship</p><hr>";
var_dump(!!5);
var_dump(!0);
var_dump(!5);
var_dump(!!"");
var_dump(!!" ");

$botao = array("Home","Sobre","Filmes","Séries");
echo '<ul>';
foreach ($botao as $but) {
    echo '<li>';
    echo '<button>';
    echo"$but";
    echo '</button>';
    echo '</li>';
}
echo '</ul>';

