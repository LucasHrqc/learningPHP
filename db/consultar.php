<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultando dados</div>

<?php

echo '<small>';
echo 'Reading database data';
echo '<small><br>';
echo 'Follow the code and comments to learn:';
echo '<small><br>';

// Requiring conexao.php to use its function newConnection
require_once "conexao.php";

// Selecting generic database information:
$sql = "SELECT id, nome, nascimento, email FROM cadastro";

// Creating the connection in Database
$connection = newConnection();
$result = $connection->query($sql);

$registers = [];

// Using fetch_assoc to get every single column of the database
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registers[] = $row;
    }
} elseif ($connection->error) {
    echo "Erro: " . $connection->error;
}

// Closing connection with database
$connection->close();

echo '</small></small><hr>';

?>

<table class="table table-hover table-striped table-bordered">
    <thead class="text-center">
    <th>Código Id</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
    </thead>
    <tbody>
    <?php foreach ($registers as $register): ?>
    <tr>
        <td class="text-center"><?= $register['id']?></td>
        <td class="text-center"><?= $register['nome']?></td>
        <td class="text-center"><?= $register['nascimento']?></td>
        <td class="text-center"><?= $register['email']?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>

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