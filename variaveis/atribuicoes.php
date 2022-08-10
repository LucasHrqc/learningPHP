<div class="titulo">Atribuições</div>

<?php
    echo '<h4> Tipos de atribuições: </h4>';
    echo '<small>';
    echo '<small>';
    echo 'Atribuição comúm: $title = "Atribuições"; <br>';
    $contador = 0;
    echo 'Atribuição contador: $contador = $contador + 1;';
    echo '<br>';
    $contador = $contador + 1;
    echo 'Incremento positivo (++) ou decremento (--): "$incremento++;';
    echo '<br>';
    echo 'Adição ou remoção de valores da variável: $numero -= 5; ou $numero += 5;';
    echo '<br>';
    
    echo 'Multiplicação ou divisão do valor da variável: $numero *= 10; ou $numero /= 10;';
    echo '<br>';   
    echo '<br>';
    
    echo 'Atribuição padrão se não houver um valor a atribuir: <small>$var = $variavelDesejada ?? "valor default";';
    echo '<br>';
    echo 'Isso significa que se não houver valor atribuído à "$variavelDesejada"';
    echo '<br>';
    echo 'será repassado um valor padrão.';
?>

<style>
    h4 {
        font-size: 0.8em;
        margin-block-start: 1em;
        margin-block-end: 0.5em;
    }
</style>