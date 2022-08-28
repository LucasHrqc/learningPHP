<div class="titulo">Excluindo Dados</div>

<?php

echo '<small>';
echo 'Here we have an explanation about deleting data from database';
echo '<small><br>';
echo 'In order to delete data from database, just use DELETE FROM tablename WHERE id = X';
echo '<small><br>';

require_once "conexao.php";

// Deleting database data where ID is given
$sql = "DELETE FROM cadastro WHERE id = 2";

// Connecting to database.
$connection = newConnection();
$result = $connection->query($sql);

if ($result) {
    echo "Sucesso.";
} else {
    echo "Erro: " . $connection->error;
}

// Closing database connection.
$connection->close();
echo '</small></small><hr>';

?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }

    table {
        font-size: 1.2rem;
    }
</style>

<!--
echo '<small>';
echo 'Title';
echo '<small><br>';
echo 'Content';
echo '<small><br>';

echo '</small></small><hr>';
-->
