<div class="titulo">Argumento Padrão</div>

<?php

echo '<small>';
echo 'Trata-se do caso em que quando não é inserido um argumento.';
echo '<small><br>';
echo 'Nesse caso, são pré-definidos valores padrão para que a função seja executada a todo custo: ';
echo '<small><br>';


function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome! <br>";
}

echo "Sem argumentos de entrada: ";
saudacao();
echo "Um argumento de entrada: ";
saudacao('Lucas');
echo "Dois argumentos de entrada: ";
saudacao('Mestre', 'Supremo');
echo "Um argumento null: ";
saudacao(null,'Lucas');
echo "Ambos os argumentos null: ";
saudacao(null, null);

echo '</small></small><hr>';

echo 'Os valores padrões sempre tem de ser adicionados após os argumentos variáveis.';
echo '<small><br>';
echo 'Isso porque caso contrário, os argumentos padrões terão que ser inseridos e não terão utilidade: ';
echo '<small><br>';
function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>

<!--
echo '<small>';
echo 'Title: ';
echo '<small><br>';
echo 'Content';
echo '</small><hr>';
-->