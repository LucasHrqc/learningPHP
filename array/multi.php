<div class="titulo">Multidimensionais ou Matrizes</div>

<?php

    echo '<small>';
    echo '<small>';
    echo 'Array dentro de um array: $dados[array1][array2]: ';
    echo '<small>';
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "naturalidade" => "São Paulo"
        ],
        [
            "nome" => "Maria",
            "idade" => 25,
            "naturalidade" => "Bahia",
        ],
    ];
    echo '<br>';
    print_r($dados);
    echo '</><hr>';
    echo '</small>';

    echo 'Para pegar um elemento específico mais interno: ';
    echo '<small><br>';
    echo $dados[0]["naturalidade"];    
    echo '<br>';
    echo $dados[1]["nome"];
    echo '</small><hr>';

    echo 'Criando um novo array interno: ';
    echo '<small><br>';
    $dados[] = [
        "nome" => "Lucas",
        "idade" => 26,
        "naturalidade" => "Cidade do México",
    ];
    print_r($dados);
    echo '</small><hr>';

    echo 'A função unset não reorganiza o array após da remoção de array interno!';
    echo '<small><br>';
    unset($dados[1]);
    print_r($dados);
    echo '</small><hr>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>