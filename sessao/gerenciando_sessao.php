<div class="titulo">Gerenciamento de Sessão</div>

<?php
// session_id('rofo20vb2a0siqgq7ikengjilr');
session_start();

echo '<small>';
echo 'Exemplo de como manter a sua session mais segura';
echo '<small><br>';
echo 'Sessions possuem IDs que podem ser acessados indeterminadamente
e por este motivo é preciso garantir que isso não seja feito.';
echo '<small><br>';

/* 
    Encerrando o navegador, a session permanece com o mesmo ID
*/
echo session_id();
// rofo20vb2a0siqgq7ikengjilr

/* 
    Criando um ID diferente a cada 5 atualizações.
*/
if ($_SESSION['contador'] % 2 === 0) {
    session_regenerate_id();
}

/*
    Destruindo a sessão e reiniciando.
*/
if($_SESSION['contador'] >= 10){
    session_destroy();
}

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1; 
echo '<br>' . $_SESSION['contador'];
echo '</small></small><hr>';

?>

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