<?php namespace Outro\Nome; ?>

<div class="titulo">Use As</div>

<?php

echo '<small>';
echo 'Definindo uma sequência de código em um namespace em arquivo diferente';
echo '<small><br>';
echo 'Acessando a classe, método e variável do arquivo use_as_arquivo:';
echo '<small><br>';

echo 'O namespace deste arquivo original se chama: ' . __NAMESPACE__ . '<br>';

echo '</small><hr>';

echo 'Incluindo arquivo use_as_arquivo:';
echo '<small><br>';
/* 
    A partir do momento em que é feito o include, todo o arquivo pode ser
    acessado através do namespace dele. 
*/

include ('use_as_arquivo.php');

/* 
    Criando uma função soma neste arquivo para 
    conflitar com a função soma do arquivo incluso. 
*/

function soma($a, $b) {
    return $a . $b; // Eu sei que está errado!
}

/* 
    Criando uma classe com mesmo nome do arquivo incluso para 
    conflitar com a classe do arquivo incluso. 
*/

class Classe {
    public $var;

    function func(){
        echo 'Namespace é: ' . __NAMESPACE__ . ' -> A classe é: ' .
        __CLASS__ . ' -> A função é: ' . __METHOD__ . '<br>';
    }
}

/*
    Precisa da barra no inicio pra acessar de maneira absoluta.
*/
echo 'Constante acessando pelo namespace: ' . \Nome\Bem\Grande\constante . '<br>';

echo '</small><hr>';
echo 'Utilizando USE pra poder utilizar a constante como se fosse do próprio arquivo:';
echo '<small><br>';
/*
    Quando você define o USE da constante através do namespace, é possível
    utilizar a constante quantas vezes quiser como se fosse do mesmo arquivo.

    O mesmo não é possível de se fazer com a função, pois haverá conflito
    entre este arquivo e o outro. O que pode ser feito neste caso é criar um apelido pra 
    aquela função do outro arquivo e ser utilizada aqui.
*/
use const \Nome\Bem\Grande\constante;
echo 'Acessando constante do namespace \Nome\Bem\Grande de
maneira global após o uso do "use": ' . constante. '<br>';

echo '</small><hr>';
echo 'Utilizando USE AS pra poder referênciar o namespace com apelido:';
echo '<small><br>';

/* 
    Dessa forma, é possível utilizar somente o apelido para 
    referenciar o namespace:
*/

use \Nome\Bem\Grande as ctx;
echo 'Acessando a constante do namespace por apelido: ' . ctx\constante . '<br>';
echo 'Acessando a função soma, obviamente deste arquivo, pois 
se tentar utilizar ctx\soma(a, b) causará conflito. ' . soma(1,2) . '<br>'; // Está concatenando, usando a função deste arquivo.

/* 
    Setando a função do outro arquivo como padrão através do namespace e 
    apelidando para não causar nenhum tipo de conflito entre ambas.
*/

echo '</small><hr>';
echo 'Utilizando USE AS para referênciar o namespace com apelido e resolver conflito das funções:';
echo '<small><br>';

use function \Nome\Bem\Grande\soma as somaReal;
echo 'Soma pelo use function (namespace do arquivo) as somaReal: ' . somaReal(10,25) . '<br>'; 

echo '</small><hr>';
echo 'Tentando utilizar as funções e classes:';
echo '<small><br>';

/* 
    Ao tentar acessar a classe, obviamente será acessada deste arquivo.
*/
echo 'Acessando a classe deste arquivo: <br>';
$a = new Classe();
$a->func();

/* 
Para acessar de outro arquivo, referenciando o namespace:
*/

echo 'Acessando a classe do outro arquivo por referência do namespace: <br>';
$b = new \Nome\Bem\Grande\Classe();
$b->func();

echo 'Acessando a classe do outro arquivo pelo apelido: <br>';
$c = new ctx\Classe();
$c->func();

// Fim.
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
