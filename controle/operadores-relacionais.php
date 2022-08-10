<div class="titulo">Operadores Relacionais: </div>

<?php 

echo '<small>';
echo 'São iguais a C++ <hr>';
echo '<small>';
echo 'Igual: ==';
echo '<br>';
echo 'Estritamente igual:  ===';
echo '<br>';
echo 'Maior: >';
echo '<br>';
echo 'Menor: <';
echo '<br>';
echo 'Maior igual: >=';
echo '<br>';
echo 'Menor igual: <=';
echo '<br>';
echo 'Diferente: !=';
echo '<br>';
echo 'Estritamente diferente: !==';
echo '<br>';
echo '</small>';
echo '<br>';

echo 'Algumas operações com if e else: <br><hr>';
echo '<small>';
$idade = 15;
if ($idade < 18) {
    echo "Menor de idade, $idade anos.<br>";
} else if ($idade < 65) {
    echo "Adulto, $idade anos.<br>";
} else
    echo "Idoso, $idade anos.";

    echo '</small>';
    echo '<br>';
    echo 'Operador spaceship: <br><hr>';
    echo '<small>';
    echo 'vardump(500 <==> 5); --> ';
    echo var_dump(500 <=> 5);
    echo '<br>';
    echo "vardump(50 <==> 50); --> ";
    echo var_dump(50 <=> 50);
    echo '<br>';
    echo "vardump(5 <==> 500); --> ";
    echo var_dump(500 <=> 3);

?>

<style>
    hr {
        margin: 0px;
    }
</style>