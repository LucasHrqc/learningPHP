<div class="titulo">Variáveis e Atribuições:</div>

<?php 
echo '<small>';
$numeroA = 33;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 5;
$b = 10;
$soma = $a + $b;
echo 'Soma = ' . $a . ' + '. $b . ' = ' . $soma;

echo '<p> Regras de nomenclatura de uma variável: <p>';
echo 'Precisa do símbolo para atribuição: $ <br>';
echo 'É possível começar uma variável com _ <br>';
echo 'É possível, porém não recomendado, criar variável com acentuação.'
?>