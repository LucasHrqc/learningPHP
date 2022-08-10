<div class="titulo">Desafio Sorteio:</div>

<?php 

    $nomes = [
        "Eliza",
        "Manoela",
        "Carlos",
        "Felipe",
        "Lucas",
        "Roberto",
        "Alisson"
    ];

    $sorteado = array_rand($nomes);
    echo "<div center><h1>$nomes[$sorteado]</h1></div>";
?>

<style>
    [center]{
        display: flex;
        justify-content: center;
        align-content: center;
    }
</style>