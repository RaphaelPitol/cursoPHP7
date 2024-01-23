<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="titulo">Excluir #02</div>

<?php
require_once 'conexao.php';

$conexao = novaConexao();

if($_GET['excluir']){
     //usando ? como parametros 
     $excluirSQL = 'DELETE FROM cadastro WHERE id = ?';
     //o prepare garante que não sofra um sql injection
     $stmt = $conexao->prepare($excluirSQL);
     //a letra "i" indica que recebera um inteito
     $stmt->bind_param("i", $_GET['excluir']);
     $stmt->execute();
}

$sql = 'SELECT id, nome, nascimento, email FROM cadastro';

$resultado = $conexao->query($sql);

$dados = [];

if ($resultado->num_rows > 0) {
     while ($row = $resultado->fetch_assoc()) {
          $dados[] = $row;
     }
} elseif ($conexao->error) {
     echo "Erro" . $conexao->error;
}
$conexao->close();

?>

<table class="table table-hover">
     <thead class="thead-dark">
          <th>Id</th>
          <th>Nome</th>
          <th>Nascimento</th>
          <th>Email</th>
          <th>Ações</th>
     </thead>
     <tbody>
          <?php foreach ($dados as $dado) {
          ?>
               <tr>
                    <td><?= $dado['id'] ?></td>
                    <td><?= $dado['nome'] ?></td>
                    <td>
                         <?=
                         date('d/m/Y', strtotime($dado['nascimento']))
                         ?>
                    </td>
                    <td><?= $dado['email'] ?></td>
                    <td>
                         <!-- criando uma url com o parametro &excluir e passando o id< -->
                         <a href="exercicio.php?dir=db&file=excluir_2&excluir=<?=$dado['id']?>" class="btn btn-danger">Delete</a>
                         <a href="exercicio.php?dir=db&file=update&codigo=<?=$dado['id']?>" class="btn btn-primary">Editar</a>
                    </td>
               </tr>
          <?php
          }
          ?>
     </tbody>
</table>

<style>
     table>* {
          font-size: 1.2rem;
     }
</style>