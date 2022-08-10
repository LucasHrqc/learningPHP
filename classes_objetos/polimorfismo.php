<div class="titulo">Polimorfismo</div>

<?php

echo '<small>';
echo 'Polimorfismo no PHP é um conceito que limita os métodos';
echo '<small><br>';
echo 'Ao alterar a especificação de um metodo pra uma classe específica, os
parâmetros desse método serão herdados especialmente daquela classe e nenhuma outra,
tornando ainda mais específico a aplicação daquele método.';
echo '<small><br>';

abstract class Comida {
    public $peso;

    public function __construct($pesoinserido) {
        $this->peso = $pesoinserido;
    }
}

class Arroz extends Comida {
    
}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Arroz $comida) {
        $this->peso += $comida->peso;
    }
}
$c1 = new Arroz(0.45);
$c2 = new Sorvete(0.25); // A pessoa não vai comer o sorvete porque no método comer ta fixado a classe Arroz.
$p = new Pessoa(83.45);
$p->comer($c1);

echo $p->peso;

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