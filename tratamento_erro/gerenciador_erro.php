<div class="titulo">Error Handler</div>

<?php

echo '<small>';
echo 'Gerenciando erros:';
echo '<small><br>';
echo 'Como exibir e ocultar erros, nível de criticidade: ';
echo '<small><br>';

echo 'Verificar corpo do arquivo para observar os comandos utilizados.';

/* 
    Comando para mostrar erros e warnings no navegador
*/
ini_set('display_errors', 1);
// echo 4 / 0 . '<br>';

/* 
    Comando para mostrar somente erros
*/
error_reporting(E_ERROR);
// echo 4 / 0 . '<br>';

/* 
    Comando para mostrar somente tudo novamente
*/
error_reporting(E_ALL);
// echo 4 / 0 . '<br>';

/* 
    Comando pra não mostrar nenhum warning e errors no browser
*/
// error_reporting(~E_ALL);
// echo 4 / 0 . '<br>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

/*
    Filtrando o erro de acordo com o texto estabelecido.

*/

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
    $text = 'by zero';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler();

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '</small></small>';

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