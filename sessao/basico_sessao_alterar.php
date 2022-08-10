<?php

session_start();
print_r($_SESSION);

?>

<?php
$_SESSION['email'] = 'lucas@gmail.com'; 
$_SESSION['Nome'] = 'Lucas';
?>

<p>
    <b>Nome: </b> <?=$_SESSION['nome']?> <br>
    <b>Email: </b> <?=$_SESSION['email']?>
</p>

<p>
    <button>
        <a href="http://php.localhost/exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
    </button>
</p>

<p>
    <button>
        <a href="http://php.localhost/exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar</a>
    </button>
</p>

<style>
    p {
        text-decoration: none;
        color: black;
        font-size: 1.1rem;
        margin: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    a {
        text-decoration: none;
        color: black;
        font-size: 1.1rem;
        margin: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    button {
        background-color: #dedede;
        border: 1px solid #999;
        border-radius: 2px;
    }
</style>