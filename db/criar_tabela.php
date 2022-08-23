<div class="titulo">Criando Tabelas</div>

<?php

echo '<small>';
echo 'Creating a table considering an already connected database';
echo '<small><br>';
echo 'For that, requiring the connection file:';
echo '<small><br>';

// Requiring the connection file to use its function "newConnection"
require_once "conexao.php";

// Creating the DataBase Table
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";

// Creating the connection
$connection = newConnection();
$result = $connection->query($sql);

// Error message in case the connection fails.
if($result) {
    echo "Success :)";
} else {
    echo "Error: " . $connection->error;
}

// Closing the connection
$connection->close();

echo '</small></small><hr>';

?>
<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
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
