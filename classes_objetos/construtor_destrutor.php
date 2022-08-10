<div class="titulo">Construtor e Destrutor</div>

<?php

echo '<small>';
echo 'Como são utilizados e para que:';
echo '<small><br>';
echo 'Construtores são utilizados para criar objetos, são métodos.';
echo '<small><br>';

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos.<br>";
    }

}

// $pessoa = new Pessoa() // PROBLEMA

$pessoa = new Pessoa('Lilith', 40);
$pessoa->apresentar();
unset($pessoa); // CHAMA O DESTRUTOR

$pessoa2 = new Pessoa('Maria', 10);
$pessoa2->apresentar();
$pessoa2 = null; // CHAMA O DESTRUTOR

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
