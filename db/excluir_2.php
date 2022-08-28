<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluindo Dados 2</div>

<?php

echo '<small>';
echo 'In real world scenarios, data is never deleted';
echo '<small><br>';
echo 'It is used a logic operator or data attribution to identify whether the data was 
deleted or not';
echo '<small><br>';

// Requiring the file conexao.php to use its function newConnection
require_once "conexao.php";

// Selecting EVERYTHING from table cadastro in database.
$registers = [];
$connection = newConnection();

/*
    Checking if GET request has an "excluir" to delete data required by pressing the
    excluir button in the page. Also, using prepare to avoid SQL injection attacks by URL
*/
if ($_GET['excluir']) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $connection->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

// Connecting to database through conexao.php function, accessible thanks to require_once
$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$result = $connection->query($sql);

// Checking if connection was successful or not.
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registers[] = $row;
    }
} elseif ($connection->error) {
    echo "Erro: " . $connection->error;

}

$connection->close();
echo '</small></small><hr>';

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
    <?php foreach ($registers as $register): ?>
        <tr>
            <td><?= $register['id'] ?></td>
            <td><?= $register['nome'] ?></td>
            <td><?= $register['email'] ?></td>
            <td><?= date('d/m/Y',strtotime($register['nascimento'])) ?></td>
            <td>
                <a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $register['id'] ?>" class="btn btn-danger">Excluir</a>
            </td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

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