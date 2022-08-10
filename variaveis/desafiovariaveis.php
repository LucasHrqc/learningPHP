<div class="titulo">Desafio: </div>

<?php 
    echo '<p> Resultado da expressão matemática: </p>';

    $num1 = (6*(3+2))**2 / (3*2);
    $num2 = (((1-5)*(2-7))/2)**2;
    $resultado = ($num1 - $num2)**3 / 10**3;

    echo 'Resultado = ' . $resultado . '.';

?>

