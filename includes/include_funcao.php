<div class="titulo">Include Função</div>

<?php

echo '<small>';
echo 'Incluindo um arquivo dentro de uma função.';
echo '<small><br>';
echo 'Quando o include é chamado dentro de uma função, todo acesso de funções e variáveis
se torna limitado à função em que foi chamado, não sendo possivel acessar no escopo global.';
echo '<small><br>';

echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
//  echo "Variável = '{$variavel}'.";  //  Não vai funcionar, pois não foi definida, somente no escopo da função.
//  echo soma(2, 5) . '<br>';  //  Não vai funcionar porque a função soma só foi definida dentro do escopo da função carregarArquivo.
carregarArquivo();
echo "Soma é: " . soma(3, 8); // É possivel chamar a função SOMA depois de chamar a função que contem ela, carregarArquivo().

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