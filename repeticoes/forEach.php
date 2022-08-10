<div class="titulo">Foreach</div>

<?php
    echo '<small>';
    echo '<small>';
    echo 'Percorrerá o valor dos elementos do array: ';
    echo '<small><br>';
    echo 'foreach ($array as $valor) {}';
    echo '<br>';
    $array = [
        'Domingo', 
        'Segunda', 
        'Terça', 
        'Quarta', 
        'Quinta', 
        'Sexta', 
        'Sábado'
    ];
    foreach ($array as $valor) {
        echo "$valor ";
    }
    echo '</small><hr>';
    
    echo 'Percorrerá o índice e valor dos elementos do array: ';
    echo '<small><br>';
    echo ' foreach ($array as $indice => $valor) {}';
    echo '<br>';
    foreach ($array as $indice => $valor) {
        echo "$indice => $valor <br>";
    }
    echo '</small><hr>';

    echo 'Percorrendo o valor dos elementos da matriz: ';
    echo '<small><br>';
    echo 'foreach ($matriz as $linha) { foreach ($linha as $valor) { }}';
    echo '<br>';
    $matriz = [
        ['a', 'e', 'i', 'o', 'u'], 
        [1, 2, 3, 4, 5]
    ];
    foreach ($matriz as $linha) {
        foreach($linha as $valor) {
            echo "$valor ";
        }
        echo "<br>";
    }
    echo '</small><hr>';

    echo 'Alterando os valores do array pelo endereço: ';
    echo '<small><br>';
    echo 'Neste caso, dobrar os elementos: foreach($array as &$elemento) {$elemento *= 2;} ';
    $numeros = [1, 2, 3, 4, 5];
    echo '<br>Array de números: ';
    print_r($numeros);
    echo '<br>';
    foreach ($numeros as &$dobrar) {
        $dobrar *= 2;
        echo "$dobrar ";
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