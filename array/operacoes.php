<div class="titulo">Operações com Arrays:</div>

<?php

    echo '<small>';
    echo '<small>';
    echo 'Junção de informações de dois arrays: <br>';
    echo '<small>';
    $dados1 = [
        "nome" => "Jose",
        "idade" => 28,
    ];
    
    $dados2 = [
        "naturalidade" => "Fortaleza"   
    ];
    
    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);
    
    echo '<hr></small>';
    echo 'Saber quantos elementos há num array, count($array): ';
    echo '<small>';
    echo count($dadosCompletos);
    echo '</small><br><hr>';
    
    echo 'Pegar um índice random: $indice = array_rand($array): ';
    echo '<small>';
    $indice = array_rand($dadosCompletos);
    echo "$indice";
    echo '</small><hr>';
    
    echo 'Interpolar com chaves: echo "{$array["chave"]}": ';
    echo '<small>';
    echo "{$dadosCompletos['idade']}";
    echo '</small><hr>';

    echo 'Removendo elemento: unset($array["chave"]);": ';
    echo '<small><br>';
    unset($dadosCompletos['idade']);
    print_r($dadosCompletos);
    echo '</small><br><hr>';
    
    echo 'Junção por array_merge para não sobreescrever: array_merge($array1, $array2);": ';
    echo '<small><br>';
    $pares = [2, 4, 6, 8];
    print_r($pares);
    echo '<br>';
    $impares = [1, 3, 5, 7];
    print_r($impares);
    echo '<br>';
    $soma = array_merge($pares, $impares);
    sort($soma);
    print_r($soma);
    echo '<br>';
    echo 'Usando sort($array): <br>';
    sort($soma);
    print_r($soma);
    echo '</small><hr>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>
