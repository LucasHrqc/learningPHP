<div class="titulo">Usando Tipos:</div>

<?php

    echo '<small>';
    echo 'Função somar normal:';
    echo '<small><br>';
    echo 'Sem definir o tipo de variável dentro da função: ';
    echo '<small><br>';

    function somar1($a, $b){
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    echo somar1(1, 2) . '<br>';
    echo somar1(1.7, 2.5) . '<br>';
    echo '</small></small><hr>';


    echo 'Função somar com INT:';
    echo '<small><br>';
    echo 'Definindo na FUNÇÃO o tipo de variável: ';
    echo '<small><br>';

    function somar2(int $a, int $b){
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    echo somar2(1, 2) . '<br>';
    echo somar2(1.7, 2.5) . '<br>';
    echo '</small></small><hr>';


    echo 'Função somar com RETORNO do tipo INT:';
    echo '<small><br>';
    echo 'Não será convertido o valor de entrada pra INT, somente o return: ';
    echo '<small><br>';

    function somar3($a, $b): int {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    echo somar3(1, 2) . '<br>';
    echo somar3(1.7, 2.5) . '<br>';
    echo '</small><hr>';

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
echo '<small>';
echo 'Content';
echo '<small><br>';
echo '</small><hr>';
-->