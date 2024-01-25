<div class="titulo">PDO: Inserir</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
 VALUES (
     'Juliani',
     '1987-06-07',
     'juliani@cod3r.com',
     'https://juliani.site.br',
     2,
     15000.50
)";


$conexao = novaConc();

// print_r(get_class_methods($conexao));
// print_r($conexao->errorInfo());

if($conexao->exec($sql)){
     $id = $conexao->lastInsertId();
     echo "Novo Cadastro com Id: $id.";
}else{
     echo $conexao->errorCode();
     print_r($conexao->errorInfo());
}

// $conexao->close();