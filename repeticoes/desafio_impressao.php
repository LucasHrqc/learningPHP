<div class="titulo">Desafio Impressão:</div>

<!-- 
Enunciado:
 - Imprimir apenas os valores do array que contém indice par
 - Resolver com for e foreach
 - Valores esperados: AAA, CCC, EEE
-->

<?php
    echo '<small>';
    echo '<small>';
    echo '- Imprimir apenas os valores do array que contém indice par. <br>
    - Resolver com for e foreach. <br>
    - Valores esperados: AAA, CCC, EEE: ';
    echo '<small><br>';
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];
    print_r($array);
    echo '<br> Foreach: ';
    foreach ($array as $indice => $valor) {
        if($indice % 2 === 1) {
            continue;
        }
        echo "$valor ";
    }
    echo '<br> FOR: ';
    for ($i = 0; $i < count($array); $i++) {
        if($i % 2 === 1) {
            continue;
        }
        echo "$array[$i] ";
    }
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
echo 'Title: ';
echo '<small><br>';
echo 'Content';
echo '</small><hr>';
-->


