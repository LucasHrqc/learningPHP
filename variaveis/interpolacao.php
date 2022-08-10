<div class="titulo">Interpolação:</div>

<?php 
    echo '<small>';
    echo '<p> Como interpolar dados: </p>';
    echo '<small>';
    echo 'Utilizando interpolação entre string e número';
    echo 'É bom lembrar que aspas simples NUNCA vai interpolar!';
    echo '<br>';
    $num = 10;
    echo $num;
    $texto = "A sua nota é: $num";
    echo "<br>$texto!!!";
    $objeto = 'carro';
    echo "<br> Eu tenho 5 {$objeto}s."
?>