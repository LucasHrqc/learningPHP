<div class="titulo">Argumentos Variáveis:</div>

<?php

    echo '<small>';
    echo '<small>';
    echo 'Quando há a necessidade de passar vários valores pra dentro do mesmo atributo na função: ';
    echo '<small><br>';
    echo 'Considerando uma função SOMA:';
    echo '<br>';

    //'É criado um Array com os valores passados pra dentro da função: '
    echo 'É criado um Array com os valores passados pra dentro da função.';
    echo '<br>';
    function somaCompleta(...$numeros) {
        print_r($numeros);
        echo '<br>';
        $soma = 0;
        foreach($numeros as $num) {
            $soma += $num;
        }
        return "A soma é: {$soma}";
    }
    echo somaCompleta(1, 2, 3, 4, 5);

    echo '</small><br><hr>';
    echo 'Tentando entrar com um array na função. Se não houver function nome(...$array), <br> o array inserido será adicionado no array interno da função: ';
    echo '<small><br>';
    $array = [6, 7, 8];
    // NESTE CONTEXTO OS TRÊS PONTINHOS ESPALHAM O CONTEÚDO DO ARRAY PRA FUNÇÃO
    echo somaCompleta(...$array);
    echo '</small></small><hr>';

    echo '<small>';
    echo 'Quando há a necessidade de passar vários valores pra dentro do mesmo atributo na função: ';
    echo '<small><br>';
    echo 'Considerando uma função SOMA:';
    echo '<br>';
    function membros($titular, ...$dependentes) {
        echo "Titular: $titular.<br>";
        if($dependentes) {
            foreach($dependentes as $dep) {
                echo "Dependente: $dep. <br>";
            }
        }
    }

    membros("Altemir", "Silvane", "Lucas", "Micheli");
    echo '<br>';
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