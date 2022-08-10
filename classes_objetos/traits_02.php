<div class="titulo">Traits 2</div>

<?php

echo '<small>';
echo 'E se as traits tiverem o mesmo nome?';
echo '<small><br>';
echo 'Traits são interfaces e classes abstratas que herdam métodos a classes concretas 
sem a necessidade de uma relação de herença direta.';
echo '<br> Nesse caso, temos duas traits com métodos iguais, porém qual o php irá escolher?';
echo '<small><br>';

trait validacao2 {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor2 {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}
/*
    No caso abaixo, ambas as traits tem métodos com o mesmo nome e o php
    não sabe qual delas escolher, para isso, configuramos o comando abaixo:
*/

class Usuario2 {
    use validacao2, ValidacaoMelhor2 {
        validacaoMelhor2::validarString insteadOf validacao2; // Usar um em detrimento de outro
    
        validacao2::validarString as validacaoSimples; // Renomea-la dentro da classe para não haver conflito.
    }
}
$usuario = new Usuario2();
echo 'Validação Melhorada: ';
var_dump($usuario->validarString(' '));
echo '<br> Validação Simples: ';
var_dump($usuario->validacaoSimples(' '));

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
