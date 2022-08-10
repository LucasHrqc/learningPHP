<div class="titulo">Classes & Objetos</div>

<?php

echo '<small>';
echo 'Como criar uma classe, atributo e método:';
echo '<small><br>';
echo 'Para criar uma classe:';
echo '<small><br>';
echo 'class Cliente { }.';
echo '</small><br>';
echo 'Para atribuir um atributo:';
echo '<small><br>';
echo 'class Cliente { public $nome = "Lucas";}.';
echo '</small><br>';
echo 'Para atribuir um método:';
echo '<small><br>';
echo 'class Cliente {public function nome($arg) { comandos };}.';
echo '<br>';

// Criando a Classe
class Cliente {
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        // O THIS é usado para identificar o atributo daquele objeto.
        echo "Nome: {$this->nome} Idade: {$this->idade} anos.<br>";
    }
}
// Criação dos objetos
$c1 = new Cliente();
// Acessando a função dentro da classe. Na função é usado THIS para pegar
// os atributos do objeto $c1.
$c1->apresentar();
// Alterando um atributo de um objeto
$c1->nome = 'Lucas Henrique da Costa';
$c1->idade = '25';
$c1->apresentar(); // Acessando a função no interior da classe.
// Criando um novo objeto
$c2 = new Cliente;
$c2->nome = 'Micheli da Costa';
$c2->idade = '35';
$c2->apresentar();



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
