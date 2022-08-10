<div class="titulo">Operadores Lógicos</div>

<?php

echo 'Verdadeiro ou falso com var_dump: <hr>';
echo '<small>';
var_dump(true);
echo '<br>';
var_dump(!true);
echo '</small><br><br>';

echo 'Tabela verdade AND (&&, and):<br><hr>';
echo '<small>';
echo "V V: ";
var_dump(true && true);
echo '<br>V F: ';
var_dump(true && false);
echo '<br>F V: ';
var_dump(false && true);
echo '<br>F F: ';
var_dump(false && false);
echo '</small><br>';

echo '<br>Tabela verdade OU (||, or):<br><hr>';
echo '<small>';
echo "V V: ";
var_dump(true || true);
echo '<br>V F: ';
var_dump(true || false);
echo '<br>F V: ';
var_dump(false || true);
echo '<br>F F: ';
var_dump(false || false);
echo '<br> ';
echo '</small>';

echo '<br>Tabela verdade OU Exclusivo (xor):<br><hr>';
echo '<small>';
echo "V V: ";
var_dump(true xor true);
echo '<br>V F: ';
var_dump(true xor false);
echo '<br>F V: ';
var_dump(false xor true);
echo '<br>F F: ';
var_dump(false xor false);
echo '<br> ';
echo '</small><br>';

echo 'Exemplo: <br><hr>';
echo '<small>';
$idade = 65;
$sexo = 'M';

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}
echo '</small>';

?>

<style>
hr {
    margin-top: 5px;
    margin-bottom: 5px;
}
</style>


