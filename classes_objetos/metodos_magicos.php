<div class="titulo">Métodos Mágicos</div>

<?php

    echo '<small>';
    echo 'Métodos mágicos são funções especiais do PHP: ';
    echo '<small><br>';
    echo 'Constituídas através de __nomedafunção. ';
    echo '<small><br>';

    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo 'Construtor invocado! <br>';
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo '<br>E morreu!<br>';
        }

        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos. <br>";
        }

        public function apresentar() {
            echo $this;
        }

        // Utilizado para pegar atributo não declarado pela classe e nem criado
        // pelo construtor.
        public function __get($atrib) {
            echo "Usando GET e lendo atributo nao declarado: {$atrib} <br>";
        }

        // Utilizado para SETAR um novo atributo não declarado previamente.

        public function __set($atrib, $valor) {
            echo "Usando SET e alterando atributo não declarado: {$atrib} / {$valor}";
        }

        public function __call($metodo, $params) {
            echo "Tentando executar método '${metodo}'";
            echo ", com os parâmetros: ";
            print_r($params);
        }

    }

    $pessoa = new Pessoa('Ricardo', 40); // chamando __construct
    $pessoa->apresentar(); // chamando __toString via função apresentar (echo)
    echo $pessoa; // chamando __toString
    $pessoa->nome = 'Reinaldo';
    $pessoa->apresentar(); // chamando __toString

    echo '</small><hr>';
    echo 'Utilizando o __get() para pegar atributo não definido no objeto e __set() para altera-lo:';
    echo '<small><br>';

    echo $pessoa->atributoNaoDeclarado; // chamando __get
    $pessoa->atributoNaoDeclarado = 'Algo nada a ver'; // chamando __set
    echo '<br>';

    echo '</small><hr>';
    echo 'Utilizando o __call() para chamar o método que não tá disponível dentro do objeto: ';
    echo '<small><br>';

    $pessoa->exec(1, 'teste', true, [1,2,3]); // chamando __call porque exec não existe no objeto $pessoa.
    $pessoa = null; // chamando __destruct
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
