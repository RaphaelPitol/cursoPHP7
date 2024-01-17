<div class="titulo">If Else</div>

<?php

if(true){
    echo "Serei impresso";
    echo "<br>";
    echo "Serei impresso pela segunda vez";
    echo "<br>";
}
if (false) {
    echo "Verdadeiro <br>";
}else{
    echo "Falso <br>";
}

if (!true) {
    echo "Passo A";
}else if (!true) {
    echo "Passo B";
}else if (!false) {
    echo "Passo C";
}else if (true) {
    echo "Passo D";   
}