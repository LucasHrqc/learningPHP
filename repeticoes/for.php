<div class="titulo">Repetição FOR</div>

<?php
echo '<small>';
echo '<small>';
echo 'Estrutura do for:';
echo '<small><br>';
echo 'for($i = 1; $i <= 5; $i++) { echo $i; }';
echo '<br>';
for($i = 1; $i <= 5; $i++) { 
    echo "$i ";
}
echo '</small><hr>';

echo 'Percorrendo um array com FOR: ';
echo '<small><br>';
echo 'for($i = 0; $i < count($array); $i++): ';
echo '<br>';
$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
for($i = 0; $i < count($array); $i++) {
    echo "$array[$i] ";
}
echo '</small><hr>';

echo 'Percorrendo agora uma matriz com FOR: ';
echo '<small><br>';
echo 'for($i = 0; $i < count($array); $i++) { for($j = 0; $j < count($array[i]); $j++)';
echo '<br>';
$matriz = [['a', 'e', 'i', 'o', 'u'], ['a', 'b', 'c', 'd']];
for($i = 0; $i < count($matriz); $i++) {
    for($j = 0; $j < count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]} ";
    }
    echo '<br>';
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