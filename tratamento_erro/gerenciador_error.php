<div class="titulo">Error Handler</div>

<?php

ini_set('display_errors', 1);

// echo 5 / 0 . '<br>';
error_reporting(E_ERROR);
// echo 5 / 0 . '<br>';

error_reporting(E_ALL);
// echo 5 / 0 . '<br>';

error_reporting(~E_ALL);
// echo 5 / 0 . '<br>';

error_reporting(E_ALL);
include 'arquivo_inixistente.php';
echo 5 / -0 . '<br>';

function filtrarMensagem($erro, $errstring){
     $text = 'include';
     // $text = 'by zero';

     return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);