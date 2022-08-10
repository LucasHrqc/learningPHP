<div class="titulo">Desafio Intdiv</div>

<?php
echo '<small>';
echo 'Criar uma função intdiv sem causar conflitos com a API do PHP:';
echo '<small><br>';
echo 'Na função terá que ser configurada as exceções de acordo 
com as condiçoes propostas.';
echo '<small><br>';

include_once('desafio_intdiv_nsp.php');
use function \desafio\intdiv;

ini_set('display_errors', 1);

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 3);

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