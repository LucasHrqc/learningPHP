<?php

/*
    Criando banco de dados. 
*/

function newConnection($banco = 'curso_php'){
    $server = '127.0.0.1';
    $user = 'root';
    $password = '';

    $connection = new mysqli($server, $user, $password, $banco);

    if($connection->connect_error){
        die('Erro: ' . $connection->connect_error);
    }
    return $connection;
}
?>
