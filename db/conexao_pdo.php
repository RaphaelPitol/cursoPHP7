<?php

function novaConc($banco = 'curso_php')
{
     $servidor = 'localhost';
     $usuario = 'root';
     $senha = 'root';

     try {
          $conexao = new PDO("mysql:host={$servidor};dbname={$banco};port=3307;charset=utf8;", $usuario, $senha);
          return $conexao;
     } catch (PDOException $e) {
          die("Erro:" . $e->getMessage());
     }
}

// $servidor = 'localhost';
// $usuario = 'root';
// $senha = 'root';
// $banco = 'curso_php';

// try {
//      $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3307;charset=utf8;", $usuario, $senha);
// } catch (PDOException $e) {
//      die("Erro:" . $e->getMessage());
// }
