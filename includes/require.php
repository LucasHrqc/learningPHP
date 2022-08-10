<div class="titulo">Require</div>

<?php

echo '<small>';
echo 'Explicando a diferença e como o require age em comparação ao include';
echo '<small><br>';
echo 'O require exige a existência do arquivo, apresentando um erro fatal e 
parando a aplicação caso não haja. O include aponta o erro na falta do arquivo, porém não
para a aplicação.';
echo '<br><br>';
echo 'Usando include com arquivo inexistente...<br>';
echo '<small>';

ini_set('display_errors', 1);
include('arquivo_inexistente.php');

echo '</small><hr>';

echo 'Usando require com arquivo inexistente...<br>';
echo '<small>';
require('arquivo_inexistente.php');

echo '</small></small><hr>';

?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
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