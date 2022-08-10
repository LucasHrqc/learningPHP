<div class="titulo">Desafio Tabela 2:</div>

<?php
    echo '<small>';
    echo '<small>';
    echo 'Montar Tabela HTML com PHP com certas condições: ';
    echo '<small><br>';
    echo 'Um form pra entrar com linha e coluna da tabela<br>
    A tabela será preenchida de acordo com as informações requeridas.';
    echo '<br>';
    $matriz = [
        ['01','02','03','04','05'],
        ['06','07','08','09','10'],
        ['11','12','13','14','15'],
        ['16','17','18','19','20'],
    ];
    echo '</small><hr>';
?>

<!-- FORMULÁRIO POST COM VALUE SETADO -->

<form action="#" method=POST>
    <input type="text" name="linhas" value=" <?= $_POST['linhas'] ?? '' ?>">
    <input type="text" name="colunas" value=" <?= $_POST['colunas'] ?? '' ?>">
    <button>Gerar Tabela</button>
</form>

<?php
print_r($_POST);
$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);
?>

<!-- TABELA HTML + PHP INTERAGINDO COM POST -->

<table>
    <?php
        $cont = 1;
        for ($i = 0; $i < $linhas; $i++) {
            echo '<tr>';
            for($j = 0; $j < $colunas; $j++) {
                $matriz[$i][$j] = $cont;
                echo "<td>{$matriz[$i][$j]}</td>";
                $cont++;
            } 
            echo '</tr>';
        }
    ?>
</table>

<?php
echo '</small><hr>';
?>

<style>
    button {
        font-size: 1rem;
        background-color: #dedede;
    }

    input {
        font-size: 1rem;
    }

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