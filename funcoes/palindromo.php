<div class="titulo">Desafio do Palindromo:</div>

<?php
    echo '<small>';
    echo '<small>';
    echo 'Criar uma função para:';
    echo '<small><br>';
    echo 'Verificar se o atributo de entrada é um palindromo, ou seja,
    a palavra é a mesma quando invertida a ordem de suas letras.';
    echo '<br>';

    function palindromo($nome) {
        $nome = strtolower($nome);
        $nomeinv = strrev($nome);
        if($nomeinv == $nome) {
            return "É um palidromo! {$nomeinv}";
    } else {
        return "Não é um palidromo! {$nomeinv}";
    }
    }

    $nome = 'Ana';
    $nomeinv = palindromo($nome);
    echo "{$nomeinv}";

    echo '</small></small><hr>';

    echo '<small>';
    echo 'Criar a função:';
    echo '<small><br>';
    echo 'Utilizando laço FOR:';

    function palindromo2($palavra) {
        $ultimoIndice = strlen($palavra) - 1;
        for ($i = 0; $i <= $ultimoIndice; $i++) {
            if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
                return ' Não!';
            }
        }
        return ' Sim!';
    }

    echo palindromo2('arara');

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
echo 'Title: ';
echo '<small><br>';
echo 'Content';
echo '</small><hr>';
-->