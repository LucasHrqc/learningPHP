<div class="titulo">Traits 1</div>

<?php

echo '<small>';
echo 'Definindo uma trait:';
echo '<small><br>';
echo 'Muito similar de como se define uma class ou uma interface. 
É utilizada para herdar código através da composição e não herança.';
echo '<small><br>';

trait validacao {
    public $a = 'Valor a';
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor privado dentro da trait - validacaoMelhor';
    public function validarStringMelhor($str){
        return isset($str) && trim($str); // trim tira espaços em branco.
    }
}

// Herdando por composição se utiliza USE:

class NovoUsuario {
    use validacao, validacaoMelhor;
    public function imprimirValorC() {
        echo $this->c . '<br>';
    }
}

$usuario = new NovoUsuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b, '<br>';
echo $usuario->imprimirValorC();

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
