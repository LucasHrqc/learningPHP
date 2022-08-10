<?php namespace desafio;

class Exp1 extends \Exception {
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous); 
    }
}

function intdiv($num, $den){
    if($num % $den !== 0) {
        throw new Exp1('a resposta não é inteira.');
    }
    return $num / $den;
}

try {
    $answer = intdiv(8, 3);
} catch (\desafio\Exp1 $e) {
    echo "Não foi possível calcular. <br>";
    echo "Motivo: {$e->getMessage()}<br>";
} 

try {
    $answer = intdiv(8, 0);
} catch (\DivisionByZeroError $e) {
    echo "Não foi possível calcular. <br>";
    echo "Motivo: {$e->getMessage()}<br>";
}