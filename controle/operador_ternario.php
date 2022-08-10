<div class="titulo">Operadores Ternários:</div>

<?php

    echo 'Operadores binários são if else: <br>';
    echo '<small>';
    
    $idade = 70;
    $status;
    
    if($idade >= 18) {
        $status = 'Maior de idade';
    } else {
        $status = 'Menor de idade';
    }
    echo "$status<br>";
    
    echo '</small>';
    echo '<br>';
    echo 'Operadores ternários são utilizados da seguinte maneira: <br>';
    echo '<small>';
    echo '$var = $varcomparada >= condicao ? "aplicado se true" : "aplicado se false" <br>';
    $idade = 17;
    $status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
    echo "$status<br>";
    echo '</small>';  
?>