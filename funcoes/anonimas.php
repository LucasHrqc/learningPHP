<div class="titulo">Funções Anônimas</div>

<?php

    echo '<small>';
    echo 'Função Anônima:';
    echo '<small><br>';
    echo 'Quando não há nome e a função é armazenada diretamente em uma variável: ';
    echo '<small><br>';

    $soma = function ($a, $b) {
        return $a + $b;
    };

    echo "Soma = " . $soma(1,2);
    echo '<br>';

    echo '</small></small><hr>';

    echo 'Função executando outra função.';
    echo '<small><br>';
    echo 'Passando uma segunda função como parâmetro da primeira';
    echo '<small><br>';

    function executar($a, $b, $op, $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado <br>";
    }
    executar(2, 3, '+', $soma);

    $multiplicacao = function ($a, $b) {
        return $a * $b;
    };
    
    executar(2, 3, '*', $multiplicacao);
    
    $divisao = function($a, $b) {
        return $a / $b;
    };

    executar(2, 3, '/', $divisao);
    
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
