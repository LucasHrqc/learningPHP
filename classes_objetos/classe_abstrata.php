<div class="titulo">Classe Abstrata</div>

<?php

echo '<small>';
echo 'Conceito de classe abstrata: ';
echo '<small><br>';
echo 'Uma classe que NÃO PODE SER INSTÂNCIADA por não ter 100% dos métodos implementados. 
Essa classe abstrata pode ter um ou mais métodos abstratos que são métodos sem corpo, sem comandos ou
ser até mesmo composta somente de métodos concretos, ou seja, com comandos.
São utilizadas para serem herdadas, somente isso.';
echo '<small><hr>';

abstract class Abstrata {
    abstract public function metodo1();
    protected abstract function metodo2($parametro);

}

// PODE SER HERDADA POR OUTRA CLASSE ABSTRATA:

abstract class FilhaAbstrata extends Abstrata {
    // TRANSFORMANDO O metodo1 QUE ERA ABSTRATO EM CONCRETO, DENTRO DA CLASSE ABSTRATA
    public function metodo1() {
        echo "Executando método 1<br>";
    }

    public abstract function metodo3();

}

class Concreta extends FilhaAbstrata {
    public function metodo1(){
        parent::metodo1();
        echo "Executando método 1 extendido <br>";
    }

    public function metodo2($parametro) { 
        echo "Executando método 2, $parametro <br>";
    }

    public function metodo3() {
        echo "Executando método 3 <br>";
        $this->metodo2('dentro do método 3');
    }
}

$c= new Concreta();
$c->metodo1();
$c->metodo2('dentro do método 2');
$c->metodo3();

echo 'Fim!';

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