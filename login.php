<?php
/*
    Criando a lógica para erros do login
*/
ini_set('display_errors', 0);
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(($_POST['email'])) {
    $usuarios = [
        [
            "nome" => "Lucas",
            "email" => "lucas@gmail.com",
            "senha" => "123456",
        ],
        [
            "nome" => "Laura",
            "email" => "laura@gmail.com",
            "senha" => "123654",
        ]
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido and $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: http://php.localhost/index.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário ou senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <div>  
                <h3>Login</h3>   
            </div>
            <div class="formulario">
                <form action="#" method="post">
                    <div>
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <div class="entrar_erro">
                        <button>Entrar</button>
                        <?php if ($_SESSION['erros']): ?>
                            <?php foreach($_SESSION['erros'] as $erro): ?>
                                <p> <?= $erro ?></p>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="rodape">
        Done by Lukh <?= 2022 ?>
    </footer>
</body>
</html>