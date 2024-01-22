<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php

require_once 'conexao.php';

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

$registros = [];

//verifica se o numero de linhas é maior que zero
if($resultado->num_rows > 0){
     //acossia cada resultado a uma linha atravez do fetch_assoc
     while($row = $resultado->fetch_assoc()){
          //atribui cada resultado ao array
          $registros []= $row;
     }
}elseif($conexao->error){
     echo "Erro:".$conexao->error;
}

// print_r($registros);

$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
     <thead>
          <th>ID</th>
          <th>Nome</th>
          <th>Nascimento</th>
          <th>E-mail</th>
     </thead>
     <tbody>
          <?php foreach($registros as $registro){
               ?>
               <tr>
                    <td><?=$registro['id']?></td>
                    <td><?=$registro['nome']?></td>
                    <td>
                         <?=
                         //formatação da data com date e strtotime()
                         date('d/m/Y', strtotime($registro['nascimento']))
                         ?>
                    </td>
                    <td><?=$registro['email']?></td>
               </tr>
               <?php
          }
          ?>
     </tbody>
</table>

<style>
     table > *{
          font-size: 1.2rem;
     }
</style>

