<div class="titulo">Sessão</div>

<?php

session_start();
echo '<small>';
echo 'Como iniciar uma sessão?';
echo '<small><br>';
echo 'Utilizar o comando session_start() no inicio do documento.';
echo '<small><br>';

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'lucas@gmail.com';
}

echo '</small></small><hr>';

/* 
    Link para alterar a sessão.
*/
?>
<p>
    <button>
    <a href="http://php.localhost/exercicio.php?dir=sessao&file=basico_sessao_alterar">
        Alterar Sessão
    </a></button>
</p>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 15px 0px;
    }

    p, a {
        text-decoration: none;
        color: black;
        font-size: 1.1rem;
        margin: 0px;
    }

    button {
        background-color: #dedede;
        border: 1px solid #999;
        border-radius: 2px;
    }
</style>

<!--
echo '<small>';
echo 'Title';
echo '<small><br>';
echo 'Content';
echo '<small><br>';

echo '</small></small><hr>';
-->