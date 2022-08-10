<div class="titulo">Comparação Arrays</div>

<?php
    echo '<small>';
    echo 'A ordem/tipo dos elementos, se diferentes, tornam os arrays ESTRITAMENTE diferentes: ';
    echo '<small>';
    $array1 = ['nome' => 'Maria', 'idade' => 20];
    echo '<br>';
    echo 'Array 1: ';
    print_r($array1);
    $array2 = ['nome' => 'Maria', 'idade' => 20];
    echo '<br>';
    echo 'Array 2: ';
    print_r($array2);
    echo 'iguais e estritamente iguais? sim: ';
    echo '<br>';
    var_dump($array1 == $array2);
    echo '<br>';
    $array3 = ['idade' => 20, 'nome' => 'Maria'];
    echo 'Array 3: ';
    print_r($array3);
    echo 'iguais? sim: ';
    echo '<br>';
    var_dump($array1 == $array3);
    echo '<br>';
    echo 'Estritamente iguais? não: ';
    echo '<br>';
    var_dump($array1 === $array3);
    echo '</small><hr>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>