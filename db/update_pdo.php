<div class="titulo">PDO: update</div>

<?php

require_once "conexao_pdo.php";
ini_set('display_errors', 1);
$conexao = novaConc();

$sql = 'UPDATE cadastro 
SET nome = :nome, nascimento = :nascimento, email = :email,
site = :site, filhos = :filhos, salario = :salario WHERE id = :id';

// $sql = 'UPDATE cadastro 
// SET nome = ?, nascimento = ?, email = ?,
// site = ?, filhos = ?, salario = ?, WHERE id = ?';

$nome = "Cilene Pitol";
$nascimento = "1982-08-06";
$email = "cile@c.com";
$site = "http://c.com.br";
$filhos = 2;
$salario = 5000;

$id = 25;

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":nascimento", $nascimento);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":site", $site);
$stmt->bindParam(":filhos", $filhos);
$stmt->bindParam(":salario", $salario);
$stmt->bindParam(":id", $id);


// print_r($stmt->execute());
if($stmt->execute()){
     echo "Sucesso!";
}else{
     echo "Erro";
}