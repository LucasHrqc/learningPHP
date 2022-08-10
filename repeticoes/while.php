<div class="titulo">While & Do while:</div>

<?php
    echo '<small>';
    echo '<small>';
    echo 'While: ';
    echo '<small><br>';
    echo 'while ($contador <= 10) { comandos + modificador pra resolver pra falso }: ';
    echo '<br>';
    $cont = 0;
    while ($cont <= 10) {
        echo "$cont ";
        $cont++;
    }
    echo '</small><hr>';

    echo 'Do while: ';
    echo '<small><br>';
    echo 'do { comandos + modificador pra resolver pra falso } while ($contador <= 10);: ';
    echo '<br>';
    $cont = 5;
    do {
        echo "$cont ";
        $cont++;
    } while ($cont <= 10);
    echo '</small><hr>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>


<!--
echo '<small>';
echo 'Title: ';
echo '<small><br>';
echo 'Content';
echo '</small><hr>';
-->
