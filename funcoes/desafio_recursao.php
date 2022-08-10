<div class="titulo">Desafio Recursividade: </div>

<?php

/*
Fazer a seguinte impressão do array abaixo:
array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
Display
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10
*/

echo '<small>';
echo 'O desafio é realizar uma impressão de acordo com as seguintes condições: ';
echo '<small><br>';
echo 'Quanto mais interno o elemento do array for, maior o número de ">" 
indicado para cada elemento na impressão.';
echo '<small><br>';

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>'){
    foreach($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento <br>";
        }
    }
}
imprimirArray($array);

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