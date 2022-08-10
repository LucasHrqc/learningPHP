<div class="titulo">Desafio dos 7 erros</div>

<?php

echo '<small>';
echo 'Detectar 7 erros no código disponível abaixo:';
echo '<small>';
echo '<small><br>';

interface Template {
    function metodo1();
    function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3(){
        echo "Estou funcionando <br>";
    }

    function metodo1(){
        echo "Método 1 <br>";
    }
    function metodo2($parametro){
        echo "Método 2, com $parametro <br>";
    }

}

class Classee extends ClasseAbstrata {
    function __construct($parametro){
    }

    public function metodo3(){
        parent::metodo3();
        echo "Método 3 <br>";
    }
}

$exemplo = new Classee('Parâmetroooo');
$exemplo->metodo3();

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