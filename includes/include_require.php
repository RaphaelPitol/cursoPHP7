<div class="titulo">Include Vs Require</div>

<?php

// a diferença esta nos erros o include não para sua aplicação
// o require da um erro fatal e para sua aplicação.
echo "Usando include com arquivo inexistente...";
ini_set('display_errors', 1);
include("include_inexistente.php");

echo "Usando require com arquivo inexistente...";
require("require_inexistente.php");