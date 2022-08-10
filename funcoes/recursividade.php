<div class="titulo">Recursividade: </div>

<?php

echo '<small>';
echo 'Recursividade é a quebra do problema em etapas para resolução:';
echo '<small><br>';
echo 'Reduz a complexidade de uma operação em etapas conhecidas. 
Segue exemplo de uma função para somar de 1 até o número atributo de entrada.';
echo '<small><br>';

function somarUmAte($numero) {
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}
echo somarUmAte(10);

echo '</small></small><hr>';

echo 'Função Recursiva para o mesmo problema:';
echo '<small><br>';
echo 'É a chamada da função dentro da própria função com um criterio de parada,
 formando um laço dentro da própria função.';
echo '<small><br>';

function somaRecursivaUmAte($numero) {
    if ($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}
function somaRecursivaUmAte2($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaUmAte2($numero - 1);
}

echo somaRecursivaUmAte(10);
echo '<br> Opção mais enxuta: ';
echo somaRecursivaUmAte2(10);

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