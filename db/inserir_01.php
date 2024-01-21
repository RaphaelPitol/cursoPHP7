<div class="titulo">Inserir dados</div>

<?php

require_once 'conexao.php';

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

$conexao = novaConexao();
//executa o sql
$resultado = $conexao->query($sql);

if($resultado){
     echo "Sucesso :)";
}else{
     echo "Erro:". $conexao->error;
}

//fechando a conexão
$conexao->close();