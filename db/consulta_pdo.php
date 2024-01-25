<div class="titulo">PDO: Consultar</div>

<?php
ini_set('display_errors', 1);
require_once "conexao_pdo.php";

$conexao = novaConc();

$sql = "SELECT * FROM cadastro";
//PDO::FETCH_NUM
//PDO::FETCH_ASSOC
//PDO::FETCH_CLASS
//PDO::FETCH_BOTH
$consulta = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($consulta);

echo "<hr>";


$sql = "SELECT * FROM cadastro LIMIT :qtd OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":qtd", 3, PDO::PARAM_INT);
$stmt->bindValue(":inicio", 3, PDO::PARAM_INT);

// print_r(get_class_methods($stmt));


if($stmt->execute()){
     $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
     
     print_r($resultado);

     foreach($resultado as $r){
          echo "<hr>";
          echo "Nome: ".$r->nome,"<br>E-mail: " ,$r->email;
     }
}else{
     echo "Codigo: ".$stmt->errorCode();
     print_r($stmt->errorInfo());
}