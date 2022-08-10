<div class="titulo">Retornando Função:</div>

<?php

echo '<small>';
echo 'Uma função que retorna outra função:';
echo '<small><br>';
echo 'Quando há uma sequência mais lenta de códigos com uma 
variável e há um cálculo específico para ser realizado com ela, deixa-se 
para o final, de modo a otimizar o processamento.';
echo '<small><br>';

/*
    Utilizado "use ($a)" para informar a função interna de qual outro
    parâmetro será utilizado.
*/

function soma($a) {
    // Algoritmo longo e lento
    return function($b) use ($a) { 
        return $a + $b; // 3 segundos.
    };
}
/*
    Na chamada da função é necessário especificar o segundo parâmetro
    em outro par de parênteses.
*/
echo soma(3)(5) . '<br>';

echo '</small></small><hr>';

echo 'Atribuindo a uma variável:';
echo '<small><br>';
echo 'Chamando a função com apenas um argumento e atribuindo a uma 
variável de modo que ao chamar essa variável, 
será informado o segundo argumento.';
echo '<small><br>';
$doisMais = soma(2); // Informando que a variável armazenará o primeiro argumento
echo $doisMais(10) .'<br>'; // Segundo argumento da função pra retornar o resultado.
echo $doisMais(18);

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