<div class="titulo">Break & Continue</div>

<?php
    echo '<small>';
    echo '<small>';
    echo 'O break é utilizado em laços infinitos para encerrar o laço: ';
    echo '<small><br>';
    echo 'Exemplo em código usando IF para pausar em 15: ';
    echo '<br>';
    $cont = 10;
    for (;;){
        echo "$cont ";
        $cont++;
        if($cont > 15) {
            break;
        }
    }
    echo '</small><hr>';

    echo '<small>';
    echo 'Outro exemplo utilizando Continue para imprimir somente pares: ';
    echo '<br>';
    $cont = 15;
    for (;;) {
        $cont++;
        if($cont % 2 === 1) {
            continue;
        }
        echo "$cont ";
        if ($cont >= 20) {
            break;
        }
    }
    echo '</small><hr>';

    echo '<small>';
    echo 'Utilizando o break para limitar os elementos do array: ';
    echo '<br>';
    echo 'Array em exemplo: ';
    $array = array(1,2,3,4,5,6,7,8,9,10);
    print_r($array);
    echo '<br>';
    foreach($array as $valor) {
        if($valor === 6) break;
        if ($valor % 2 === 0) continue;
        echo "$valor ";
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