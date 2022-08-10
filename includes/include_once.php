<div class="titulo">Include & Require Once</div>

<?php

    echo '<small>';
    echo 'É utilizado para garantir a única execução:';
    echo '<small><br>';
    echo 'Utilizado quando, independente de quantas chamadas houver no código, só realize uma.';
    echo '<small><br>';

    include('include_once_arquivo.php');
    // require('include_once_arquivo.php'); // Aponta erro por redeclarar a função soma.

    echo "Variável = '{$variavel}'.<br>"; // Pegando a variável pelo escopo global depois do include
    $variavel = 'Variável Alterada com Sucesso!'; // Alterando e imprimindo.
    echo "Variável = '{$variavel}'.<br>"; 
    
    include('include_once_arquivo.php'); // Reincluir o arquivo reseta as variáveis para os valores padrões de origem.
    echo "Variável = '{$variavel}'.<br>"; 
    
    echo '</small><hr>';
    echo 'Utilizando include once, a variável permanece inalterada.';
    echo '<small><br>';
    
    include_once('include_once_arquivo.php');
    echo "Variável = '{$variavel}'.<br>"; 
    
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