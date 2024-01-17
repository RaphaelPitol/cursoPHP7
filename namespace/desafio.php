<div class="titulo">Desafio do Modulo</div>
<p>A ideia deste desafio é aplicar o conceito de namespace!</p>
<?php
include('desafio/usuario.php');

use \Usuario\Usuario;

$usuario = new Usuario('Cilene', 40, false);

$usuario->apresentar();
$usuario->status();