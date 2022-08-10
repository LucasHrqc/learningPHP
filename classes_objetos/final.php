<div class="titulo">Modificador Final</div>

<?php

echo '<small>';
echo 'O modificador final é utilizado para:';
echo '<small><br>';
echo 'Impedir que a função/método seja herdado:';
echo '<small><br>';

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo "Não vou mudar!<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo "Executando método 1<br>";
    }
    /*
    O método (função) abaixo, está sendo sobreescrita.
    Porém, não é possível sobreescrever um método com modificador FINAL.

    public function metodo2() {
    echo "Extendendo método 2 <br>";
    }
    */
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

echo '</small></small><hr>';

echo '<small>';
echo 'Impedir que a classe seja herdada: ';
echo '<small><br>';

final class unica {
    public $atributo;
    public function __construct($atributo)
    {
        $this->atributo = $atributo;
    }
}

$unica = new Unica('Valor único');
echo $unica->atributo;

/*
    A classe abaixo não pode herdar UNICA, pois foi considerada como FINAL.

    class duplicata extends unica {
        public $atributo2;
}
*/

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