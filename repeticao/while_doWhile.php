<div class="titulo">While e Do-While</div>
<?php

const Valor_maximo = 10;
$contador = 0;


while($contador < Valor_maximo){
    echo "While $contador<br>";
    $contador ++;
}
echo '<hr>';

do {
    echo "Do $contador<br>";
    $contador++;
} while ($contador <= Valor_maximo);

echo '<hr>';

$contador = 0;
while(true){
    echo "While true =>$contador<br>";
    $contador++;
    if($contador >= Valor_maximo) break;
}
