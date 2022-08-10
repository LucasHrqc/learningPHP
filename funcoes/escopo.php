<div class="titulo">Função & Escopo:</div>

<?php

echo '<small>';
echo '<small>';
echo 'Função é uma série de comandos que serão executados toda vez que ela ser chamada: ';
echo '<small><br>';
echo 'O objetivo de utilizar funções é reutilizar código: ';
echo '<br>';
function imprimirMensagens(){
    echo "Olá! ";
    echo "Até a próxima! <br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo '</small></small><hr>';

$var = 1;
echo '<small>';
echo 'O conceito do escopo das variaveis DENTRO das funções: ';
echo '<small><br>';
echo 'Dentro da função, por mais que a variável seja a mesma, não se relaciona com o global: ';
echo '<br>';
function trocaValor() {
    $var = 2;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

echo 'Considerando escopo global com globarl $var <br>';

function trocaValorDeVerdade() {
    global $var;
    $var = 2;
    echo "Durante a função: $var <br>";
}
echo "Antes: $var <br>";
trocaValorDeVerdade();
echo "Depois: $var <br>";

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