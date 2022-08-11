<div class="titulo">Escrevendo Arquivos</div>

<?php

echo '<small>';
echo 'Como abrir, fechar, alterar, através da API';
echo '<small><br>';
echo 'Abrindo arquivo com fopen("nomedoarquivo"): ';
echo '<small><hr>';

/* 
    IMPORTANTE!
    Ao abrir um arquivo pela segunda vez, ele será resetado.
*/
$arquivo = fopen('teste.txt', 'w');  // Abrindo arquivo no modo de escrita 'w'.
fwrite($arquivo, "Valor inicial \n");

echo '</small>';
echo 'Adicionando linhas no arquivo: ';
echo '<small><br>';
$str = "Segunda linha \n"; // Adicionando uma segunda linha ao arquivo.
fwrite($arquivo, $str);

echo '</small><hr>';
echo 'Fechando o arquivo com fclose($arquivo): ';
echo '<small><br>';
fclose($arquivo); // Fechando arquivo com fclose.

/*
    Reabrindo arquivo para ADICIONAR informações com 'a'
    de append.
*/
echo '</small><hr>';
echo 'Abrindo arquivo e adicionando informações
com fopen($arquivo, "a"): ';
echo '<small><br>';
$arquivo = fopen("teste.txt", 'a');
fwrite($arquivo, "novas informações adicionadas com append.");
fclose($arquivo);

/*
    É POSSÍVEL criar um arquivo novo com 
    $a = fopen('nome.txt', 'x'); 
    Porém, neste caso o comando não será realizado caso já existir
    o arquivo nome.txt
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