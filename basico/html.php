<div class="titulo">Integração HTML:</div>

<!-- É possível usar tags HTML dentro do código PHP e vice-versa -->
<h1> <small>Exemplo 1</small> </h1>
<?php 
echo 'Grande';
echo '<small>';
echo ' ligeiramente menor com tag HTML small.';
echo '</small>';
?>

<h1> <small>Exemplo 2</small> </h1>
<?= '<div> Tag div dentro de string do PHP, pois o navegador interpreta ela! </div>'?>

<h1> <small>Exemplo 3</small> </h1>
<div> <button class="botao"><?="Botão em HTML com PHP"?></button></div>

<style>
    .botao {
        font-size: 1.2rem;
    }
</style>