<div class="titulo">Interface</div>

<?php

echo '<small>';
echo 'Interface possuem a mesma estrutura que classes:';
echo '<small><br>';
echo 'É uma série de métodos e comportamentos que devem ser implementados pelas classes.';
echo '<small><br>';

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero{
    function latir(): string;
}

// NA CLASSE CACHORRO É OBRIGADO A IMPLEMENTAR AS INTERFACES CHAMADAS.
class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }
 
    function mamar() {
        return "Sou mamífero";
    }

    function latir(): string {
        return 'Au Au';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';
echo $animal1->mamar(), '<br>';

echo '<hr>';
var_dump($animal1 instanceof Cachorro);
var_dump($animal1 instanceof Canino);
var_dump($animal1 instanceof Animal);
var_dump($animal1 instanceof Mamifero);

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