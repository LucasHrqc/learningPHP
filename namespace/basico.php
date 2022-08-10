<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

echo '<small>';
echo 'Como criar e utilizar o namespace:';
echo '<small><br>';
echo 'Precisa ser a primeira sentença de código do arquivo.
São utilizados para definir uma área em que as variáveis não terão 
influência em outros ambientes. Abaixo segue como declarar variaveis e imprimir através do namespace.';
echo '<small><br>';

echo "Namespace atual é: " . __NAMESPACE__ . "<br>";

const constante1 = 123;
define('contexto\constante2', 456); // Definindo a constante daquele namespace.
define('contexto\constante3', 789); // Definindo a partir do namespace atual.
define('outro_contexto\constante4', 321);

echo constante1 . '<br>';
echo constante2 . '<br>';
//  echo contexto\constante3 . '<br>'; // Ele entende que há um namespace contexto dentro desse namespace aqui.
// echo \contexto\constante3 . '<br>'; // Pode ser utilizado
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3'); // Outra maneira.
echo '<br>';
echo \outro_contexto\constante4. '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(5, 250) . '<br>'; // Acessando o namespace atual.
echo soma(5, 250) . '<br>'; // Chamando normalmente porque a função está definida neste namespace.

echo '</small><hr>';
echo 'Como acessar API do PHP ao invés de uma função com mesma nomenclatura:';
echo '<small><br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>'; // Tá acessando a função definida previamente.
echo \strpos('Texto genérico para busca', 'busca') . '<br>'; // Acessa a função API do PHP strpos normal.

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