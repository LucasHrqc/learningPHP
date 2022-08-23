<div class="titulo">Criando Banco de Dados</div>


<?php

echo '<small>';
echo 'Criação do SCHEMA e banco de dados';
echo '<small><br>';
echo 'Popularizando o banco de dados:';
echo '<small><br>';

// Chamando o arquivo onde é criado o banco de dados:
require_once "conexao.php";

// Chamando a função para criar o banco
$connection = newConnection(null);
// Comando para criar o banco de dados entitulado curso_php
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';
// Fazendo consulta no banco de dados e fechanodo:

$result = $connection->query($sql);

if($result) {
    echo "Success :)";
} else {
    echo "Error: " . $connection->error;
}

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