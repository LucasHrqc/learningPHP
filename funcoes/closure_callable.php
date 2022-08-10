<div class="titulo">Closure & Callable</div>

<?php

echo '<small>';
echo 'Callable é passível de ser chamada:';
echo '<small><br>';
echo 'É utilizado is_callable(função) para determinar se é ou não.';
echo '<small><br>';

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3);
echo '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';
echo soma2(2, 3) . '<br>';
echo (is_callable("soma2") ? 'Sim' : 'Não') . '<br>';

echo '</small></small><hr>';

echo 'Definindo uma função como callable:';
echo '<small><br>';
echo 'Quando existe uma função que tem como argumento outra função, a segunda pode ser especificada como Callable.';
echo '<small><br>';

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}
executar1(2, 3, '+', $soma1);

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
echo '<small>';
echo 'Content';
echo '<small><br>';
echo '</small><hr>';
-->