<?php include'validacao.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="recursos/css/css/exercicio.css">
    <title>Exercicio</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso Php</h1>
        <h2>Vizualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Seja Bem Vindo <?= $_SESSION['usuario'] ?></span>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" >Voltar</a>
        <a href="logout.php"class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNO-RAPHAEL PITOL © <?= date('Y'); ?>
    </footer>
</body>

</html>