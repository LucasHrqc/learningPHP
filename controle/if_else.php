<div class="titulo">Controle 1: if - else</div>

<?php
echo '<small>';
echo 'Sem definir um bloco de código, só vai aplicar o if na primeira linha e o restante será impresso: <br>';
echo '<small>';
if (false)
    echo "Serei Impresso!<br>";
    echo "Serei impresso de qualquer maneira, pois não há um bloco de código no IF.<br>";

echo '</small><br>';
echo 'Com bloco de código: ';
echo '<small><br>';

if (true) {
    echo 'Linha 1, se for true. <br>';
    echo 'Linha 2, se for true também.';
}

echo '<br>';
echo '<br>';
echo '</small>';
echo 'Estrutura if com 3 casos: ';
echo '<small> <br>';
if (false) {
    echo "Passo A <br>";
} else if (false) {
    echo "Passo B <br>";
} else {
    echo "Passo C";
}
?>
