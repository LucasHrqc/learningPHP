<div class="titulo">Constantes:</div>

<?php

echo '<small>';
echo 'Dentro do PHP não é possível alterar os elementos do array constante: ';
echo '<small>';
echo '<br>';
const FRUTAS = ['Laranja', 'Acabaxi'];
// FRUTAS[0] = 'Banana'; Não irá funcionar
// FRUTAS[] = 'Banana'; Não irá funcionar
echo FRUTAS[0];
echo '<br>';

const MOTOS = ["honda" => "CB500F", "Yamaha" => "MT-03"];
echo MOTOS["honda"];
echo '</small><hr>';

?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>