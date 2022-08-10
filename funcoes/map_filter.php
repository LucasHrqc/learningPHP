<div class="titulo">Map & Filter</div>

<?php

echo '<small>';
echo 'Utilizando um array de notas para arredonda-las:';
echo '<small><br>';
echo 'Lógica para arredondar as notas.';
echo '<small><br>';

$notas = [5.8, 6.3, 9.8, 6.7];
echo 'Notas dos alunos: ';
print_r($notas);
echo '<br>';
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}
echo 'Arredondadas: ';
print_r($notasFinais1);

echo '</small></small><hr>';

echo 'Utilizando agora um MAP para arredondar as notas:';
echo '<small><br>';
echo 'No caso do MAP a função vem primeiro e depois o array como 
segundo argumento: $notaFinal = array_map("round", $notas).';
echo '<small><br>';

$notasFinais2 = (array_map("round", $notas));
print_r($notasFinais2);

echo '</small></small><hr>';

echo 'Utilizando um FILTER para imprimir aprovados:';
echo '<small><br>';
echo 'No caso do FILTER o array vem primeiro e depois a função como 
segundo argumento: $aprovados = array_filter($notas, "funcaofiltro").';
echo '<small><br>';

function aprovados($nota){
    return $nota >= 7;
}

$Aprovados = array_filter($notas, 'aprovados');
print_r($Aprovados);



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
echo '<small><br>';
echo 'Content';
echo '<small><br>';


echo '</small></small><hr>';
-->
