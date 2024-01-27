<?php include'validacao.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <title>Curso - PHP </title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso Php</h1>
        <h2>Indice dos Exercicios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Seja Bem Vindo <?=$_SESSION['usuario']?></span>
        <a href="logout.php"class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
        <?php include_once('menu.php')?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNO-RAPHAEL PITOL ©
        <?= date('Y'); ?>
    </footer>
</body>

</html>