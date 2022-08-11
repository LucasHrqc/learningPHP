<div class="titulo">Lendo Arquivos</div>

<?php

echo '<small>';
echo 'Como ler, através da API do PHP:';
echo '<small><br>';
echo 'Lendo o arquivo com fopen("nomedoarquivo", "r"); ';
echo '<small><br>';

/* 
    O segundo parâmetro de fread informa a quantidade
    de caracteres a serem lidos.
*/
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
fclose($arquivo);


echo '</small><hr>';
echo 'Lendo pelo filesize("nome.txt"); ';
echo '<small><br>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');   // Guarda o tamanho do arquivo.
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '</small><hr>';
echo 'Como ler arquivos linha a linha com fgets($arquivo); ';
echo '<small><br>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';

/*
    FEOF - FUNCTION END OF FILE
*/
echo '</small><hr>';
echo 'Lendo até o fim do arquivo com feof($arquivo); ';
echo '<small><br>';

$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

/* 
    É POSSIVEL, fazer leitura e adição de novas informações
    em um arquivo através do $arquivo = fopen('teste.txt', 'r+');
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
