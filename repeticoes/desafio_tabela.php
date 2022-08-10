<div class="titulo">Desafio Tabela:</div>

<?php
    echo '<small>';
    echo '<small>';
    echo 'Montar Tabela HTML com PHP com certas condições: ';
    echo '<small><br>';
    echo 'Uma tabela com todos os dados em td e tr <br>
    Uma segunda tabela com fundo diferente em linhas ímpares.';
    echo '<br>';
    echo 'Tabela: ';
    echo '<br>';
    $matriz = [
        ['01','02','03','04','05'],
        ['06','07','08','09','10'],
        ['11','12','13','14','15'],
        ['16','17','18','19','20'],
    ];
    foreach ($matriz as $linha) {
        foreach($linha as $valor) {
            echo "$valor ";
        }
        echo '<br>';
    }
    echo '</small><hr>';
?>

<table>
    <?php
    foreach ($matriz as $linha) {
        echo '<tr>';
        foreach($linha as $valor) {
            echo "<td>$valor</td>";
        }
        echo '</tr>';
    }
    ?>
</table>

<?php
echo '<hr>';
?>

<table>
    <?php
        foreach ($matriz as $indice => $linha) {
            echo '<tr>';
            if($indice % 2 === 1) {
                foreach($linha as $valor) {
                    echo "<td style='background-color: red;'>$valor</td>";
                }
            } else {
                foreach($linha as $valor) {
                    echo "<td>$valor</td>";
                }
            }
            echo '</tr>';
        }
    ?>
</table>
    
<?php
echo '<hr>';
?>

<table>
    <?php
        foreach ($matriz as $index => $linha) {
            $style = $index % 2 === 1 ? 'background-color: red;' : '';
            echo "<tr style='{$style}'>";
            foreach($linha as $valor) {
                echo "<td>$valor</td>";
            } 
            echo '</tr>';
        }
    ?>
</table>

<?php
echo '</small><hr>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }

    table {
        border: 1px solid #999;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        margin: 0px;
        padding: 0px;
        border: 1px solid #999;
    }

    table td {
        padding: 5px;
    }
</style>


<!--
echo '<small>';
echo 'Title: ';
echo '<small><br>';
echo 'Content';
echo '</small><hr>';
-->