<div class="titulo">Excluir #01</div>

<?php

require_once 'conexao.php';

$conexao = novaConexao();

$sql = 'DELETE FROM cadastro WHERE id = 5';

$resultado = $conexao->query($sql);

if ($resultado) {
     echo "Sucesso :)";
}else{
     echo "Erro". $conexao->error;
}

$conexao->close();