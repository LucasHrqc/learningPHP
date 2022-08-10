<div class="titulo">Require & Return</div>

<?php

echo '<small>';
echo 'Mostrando a diferença entre variável retornada e apenas declarada:';
echo '<small><br>';
echo 'Utilizando require e acessando as variáveis por escopo global e por return:';
echo '<small><br>';

$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>"; // Acessando por return do require, atribuindo a uma nova variável.
echo "$variavelRetornada<br>"; // Acessando pelo escopo global, necessário saber o nome

// Nesse caso retorna 1 por não ter return, mas ter o arquivo.
// Se não tivesse o arquivo o require daria erro fatal.
$valorRetorno2 = require('return_nao_usado.php'); 
echo "$valorRetorno2<br>"; // Mostra somente o valor 1 por não ter return mas ter o arquivo.
echo "$variavelDeclarada<br>"; // Acessada pelo escopo global.

echo __DIR__ . '<br>'; // Mostrando o diretório deste arquivo.

$reqPeloDiretorio = require(__DIR__ . '/return_nao_usado.php');
echo "$valorRetorno2<br>";

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