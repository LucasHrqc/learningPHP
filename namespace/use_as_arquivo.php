<?php namespace Nome\Bem\Grande;

echo 'O nome do namespace é: ' . __NAMESPACE__ . '<br>';

const constante = 123;

function soma($a, $b) {
    return $a + $b;
}

class Classe {
    public $var;

    function func(){
        echo 'Namespace é: ' . __NAMESPACE__ . ' -> A classe é: ' .
        __CLASS__ . ' -> A função é: ' . __METHOD__ . '<br>';
    }
}

?>
