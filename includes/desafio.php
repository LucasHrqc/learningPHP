<div class="titulo">Desafio do Módulo</div>

<?php

echo '<small>';
echo 'Desafio de criar vários arquivos para classes específicas e incluí-las aqui.';
echo '<small><br>';
echo 'Requerindo pessoa dentro de usuario e usuario dentro do desafio.';
echo '<small><br>';

require_once('usuario.php');

$usuario = new Usuario('Lucas Henrique', 21, 'Lukh.c');
$usuario->apresentar();

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