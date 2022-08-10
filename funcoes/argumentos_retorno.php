<div class="titulo">Argumentos e retorno</div>

<?php

    echo '<small>';
    echo 'Algumas funções não tem argumentos e nem retorno';
    echo '<small><br>';
    echo 'Exemplo de função somente com retorno: ';
    echo '<small><br>';

    function obterMensagem() {
        return 'Seja bem vindo(a)!';
    }
    echo 'Como a função não possui echo, nada será exibido, porém executando a função em echo: ';
    echo '<br>';
    echo obterMensagem();
    echo '</small></small><hr>';

    echo 'Função pode ser armazenada em variável:';
    echo '<small><br>';
    echo 'A função pode ser chamada diretamente de uma variável e a variável armazenará o return:';
    echo '<small><br>';

    $mensagem = obterMensagem();
    echo $mensagem;

    echo '</small></small><hr>';


    echo 'Função com Atributo:';
    echo '<small><br>';
    echo 'Exemplo de função contendo o atributo "nome":';
    echo '<small><br>';

    function obterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }
    echo obterMensagemComNome('Lucas') . '<br>';

    echo '</small></small><hr>';


    echo 'Função SOMA com dois atributos:';
    echo '<small><br>';
    echo 'Exemplo de função contendo dois números como atributos:';
    echo '<small><br>';

    function soma($a,$b){
        return $a + $b;
    }

    echo "O resultado da soma é: " . soma(4,2);
    $x = 5;
    $y = 4;
    echo "O resultado da soma é: " . soma($x,$y);

    echo '</small></small><hr>';

    echo 'Função TROCA de valor:';
    echo '<small><br>';
    echo 'A função puxa uma cópia das variáveis, não seu endereço:';
    echo '<small><br>';

    function trocarValor($a,$novoValor) {
        $a = $novoValor;
        echo "Durante a função {$a} <br>";
    }

    $variavel = 1;
    echo "Antes: {$variavel} <br>";
    trocarValor($variavel, 3);
    echo "Depois: {$variavel}";

    echo '</small><br>';
    echo 'Para a função ser capaz de acessar o endereço da variável:';
    echo '<small>';

    /*
        Aqui foi colocado pra pegar o endereço do primeiro atributo da função
        Isso quer dizer que todo o conteúdo anterior daquela variavel será perdido
        conforme novas alterações são realizadas dentro da função.

        Para isso não acontecer, é necessário utilizar variaveis diferentes,
        sendo a variavel de dentro da função com escopo global.
        Atentar para nomenclatura para evitar sobreescrever variáveis já existentes.
    */

    function trocarValorDeVerdade(&$a, $novoValor) {
        $a = $novoValor;
        echo "Durante a função {$a} <br>";
    }

    $variavel = 1;
    echo '<br>';
    echo "Antes: {$variavel} <br>";
    trocarValorDeVerdade($variavel, 3);
    echo "Depois: {$variavel}";

?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>

<!--
echo '<small>';
echo 'Title: ';
echo '<small><br>';
echo 'Content';
echo '</small><hr>';
-->