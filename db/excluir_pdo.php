<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="titulo">PDO: Excluir</div>

<?php

require_once "conexao_pdo.php";
// ini_set('display_errors', 1);
$conexao = novaConc();

$sql = "DELETE FROM cadastro WHERE id = :id";

$id = $_GET['codigo'] ?? null;
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id);

if($id <> null) {
     $stmt->execute();
     echo "Deletado com sucesso!";
} else {
     echo "Informe um Id:";
}

?>
<form action="" method="get">
     <input type="hidden" name="dir" value="db">
     <input type="hidden" name="file" value="excluir_pdo">
     <div class="form-group row">
          <div class="col-sm-10">
               <input type="number" name="codigo" class="form-control"
               min="0"
               value="<?=$_GET['codigo'] ?? null?>"
               placeholder="Informe o codigo para consulta!">
          </div>
          <div class="col-sm-2">
               <button class="btn btn-danger mb-4">Deletar</button>
          </div>
     </div>
</form>