<div class="titulo">Sessão</div>

<?php

session_start();

print_r($_SESSION);

echo '<hr>';

if(!$_SESSION['nome']){
     $_SESSION['nome'] = "Raphael";
}
if(!$_SESSION['email']){
     $_SESSION['email'] = "raphael@email.com";
}

print_r($_SESSION);

?>
<p>
     <a href="/session/basico_sessao_alterar.php">
     Alterar Sessão
     </a>
</p>