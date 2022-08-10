<div class="titulo">Valor vs Referência:</div>

<?php  

echo '<small>';
$variavel = 'valor inicial <br>';
echo '$variavel: ' . $variavel . '<br>';

echo '</small>';

echo 'Atribuição por Valor: <br>';
echo '<small>';
// Atribuição por Valor:
$variavelValor = $variavel;
echo '$variavelValor: ' .  $variavelValor .  '<br>';
$variavelValor = 'novo valor';
echo '</small>';

// Atribuição por referência:
echo 'Atribuição por referência: <br>';
echo '<small>';
echo '$variavel: ' . $variavel;
$variavelReferencia = &$variavel;
echo '$variavelReferencia: ' . $variavelReferencia;
$variavelReferencia = 'mesma referencia';
echo '$variavelReferencia: ' . $variavelReferencia;
echo "<br> $variavel";
echo "<br>$variavelReferencia";
?>
