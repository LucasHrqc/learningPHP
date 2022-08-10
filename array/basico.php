<div class="titulo">Básico:</div>

<?php
    
    echo 'O array em PHP pode conter elementos de todos os tipos: <hr>';
    echo '<small>';
    echo 'Por exemplo o array abaixo, impresso usando print_r($lista): <br>';
    $lista = array(1, 2, 3.4, "texto");
    print_r($lista);
    echo '<br> Para acessar os elementos do array, simplesmente utilize [0]: ';
    print_r($lista[0]);
    echo '</small>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>