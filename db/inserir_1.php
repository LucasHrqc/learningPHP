<div class="titulo">Inserindo dados no Banco de Dados</div>

<?php

echo '<small>';
echo 'How to insert data in the DB';
echo '<small><br>';
echo 'Follow the code and comments:';
echo '<small><br>';

// Requiring the file to call the newconnection function
require_once "conexao.php";

// Creating data in DB with its own values
$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
    VALUES (
            'Lucinda',
            '2000-10-29',
            'lucinda@email.com',
            'https://Lucinda.sites.com.br',
            1,
            5500.87
    )";

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