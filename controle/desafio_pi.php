<div class="titulo">Desafio PI</div>
<?php

echo pi();
$pi = 3.14;
echo '<br>'.$pi;

if(pi() >= $pi){
    echo "<br>Iguais";
}else{
    echo "<br>Diferentes";
}
