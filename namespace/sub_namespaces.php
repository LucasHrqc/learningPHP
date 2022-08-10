<?php namespace App; ?>

<div class="titulo">Sub Namespace</div>

<?php

    echo '<small>';
    echo 'Utilizando namespaces dentro de um namespace';
    echo '<small><br>';
    echo 'Definindo um namespace: namespace App;';
    echo '<small><br>';

    echo 'O namespace atual se chama: ' . __NAMESPACE__ . '<br>';
    const constante = 123;
    echo 'Constante no namespace App: ' . constante. '<br>';

    echo '</small><hr>';
    echo 'Definindo um subnamespace: namespace App\Principal;';
    echo '<small><br>';

    namespace App\Principal; 
    echo 'O subnamespace atual se chama: ' . __NAMESPACE__ . '<br>';
    const constante = 234; 
    // Note que por mais que os nomes sejam os mesmos, cada namespace 
    // armazena o valor atribuido nele.
    echo 'Constante no namespace App: ' . \App\constante . '<br>';
    echo 'Constante no subnamespace App\Principal: ' . \App\Principal\constante . '<br>';

    echo '</small><hr>';
    echo 'Definindo um subnamespace: namespace App\Principal\Especifico;';
    echo '<small><br>';

    namespace App\Principal\Especifico;
    echo 'O subnamespace atual se chama: ' . __NAMESPACE__ . '<br>';
    const constante = 345;
    echo 'Constante no namespace App: ' . \App\constante . '<br>';
    echo 'Constante no subnamespace App\Principal: ' . \App\Principal\constante . '<br>';
    echo 'Constante no subnamespace App\Principal\Especifico: ' . \App\Principal\Especifico\constante . '<br>';

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