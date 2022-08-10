<div class="titulo">Herança</div>

<?php

echo '<small>';
echo 'Demonstrando o conceito de herança entre classes:';
echo '<small><br>';
echo 'Criada a classe Pessoa e posteriormente uma subclasse Usuario.';
echo '<small><br>';

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
         $this->nome = $nome;
         $this->idade = $idade;
         echo 'Pessoa Criada! <br>';      
    }

    function __destruct() {
        echo "Pessoa diz: Tchau!!";
    }

    public function apresentar() {
         echo "{$this->nome}, {$this->idade} anos.<br>";
    }
}

// Usuário é a subclasse de pessoa.
class Usuario extends Pessoa {
    public $login; // atributo diferente da classe pessoa, pois é mais específico.
    
    function __construct($nome, $idade, $login) {
        // $this->nome = $nome; 
        // $this->idade = $idade;
        // Chamando o construtor da superclasse pra definir as variáveis $nome e $idade.
        parent::__construct($nome, $idade); 
        $this->login = $login;
        echo 'Usuário Criado! <br>';
    }

    function __destruct()
    {
        echo 'Usuário diz: Tchau!';
    }

    /*
    Da seguinte maneira, a função apresentar é totalmente sobreescrita.
    */
    // public function apresentar() {
    //     echo "@{$this->login}: {$this->nome}, {$this->idade} anos.<br>";
    // }

    /*
    Da seguinte maneira, a função apresentar da superclasse também é sobreescrita.
    */
    // public function apresentar() {
    //     echo "@{$this->login}.<br>";
    // }
    
    /*
    Da seguinte maneira, será herdada a função e adicionado um comando
    */
    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Lucas Henrique', 21, 'Lukh.c');
$usuario->apresentar();

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