<div class="titulo">Constantes: </div>

<?php 
echo "<small>";
echo ('Usando a função Define para criar uma constante: <br>');
define('TAXA_DE_JUROS', 5.9);
echo '<small>';
echo TAXA_DE_JUROS;
echo '<br> Fazer echo usando "$TAXA_DE_JUROS" não funcionará, 
assim como tentar atribuir um novo valor pra constante.<br>';
echo '</small>';

echo '<br> Usando "const": ';
echo '<small>';
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;
echo '<br> É impossível usar CONST para armazenar outras variáveis na constante!';
?>