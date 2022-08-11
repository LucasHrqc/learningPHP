<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

/* 
    If there's no user in this session, then it's suppose to go to
    the login page.
*/

if(!$_SESSION['usuario']) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> >Sem formatação</a>
        <a href="index.php" class="verde">Voltar</a>
        <a class="vermelho" href="logout.php">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                // include('teste/teste.php')
            ?>
        </div>
    </main>
    <footer class="rodape">
        Done by Lukh <?= 2022 ?>
    </footer>
</body>
</html>