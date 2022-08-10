<div class="titulo">Includes</div>

<?php

echo '<small>';
echo 'Utilizando include para:';
echo '<small><br>';
echo 'trazer variaveis, funções e echos de outro arquivo.';
echo '<small><br>';

echo 'Executei essa linha do arquivo include<br>';
include('include_arquivo.php'); // Incluindo o arquivo.

// Incluir o arquivo mais de uma vez gera problema, pois não é possível redefinir a função.

echo soma(3, 8) . '!<br>'; // Puxa a função de dentro do arquivo.
echo "O conteúdo da variável é '{$variavel}'."; // Puxa a variável dentro do arquivo include.

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