<div class="titulo">Datas #02</div>

<?php

echo '<small>';
echo 'Outras funções e métodos da API do PHP';
echo '<small><br>';
echo 'Trabalhando com datas:';
echo '<small><br>';

$formatoData1 = 'D, d \d\e M \d\e Y ';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';
$agora = new DateTime();
// print_r($agora);
// echo '<br>';


/* 
    Acessando o método format dentro da instância $agora 
    e imprimindo.
*/
echo $agora->format($formatoData1). '<br>';
setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf-8');  // Ajustando para horário local - pt_BR.
echo $agora->format($formatoData1). '<br>';


/* 
    Utilizando strftime com o formato do primeiro parâmetro
    para mostrar a data que a função getTimestamp disponibiliza
    dentro da classe DateTime, instanciada na variável $agora.
*/ 
echo strftime($formatoData2, $agora->getTimestamp()). '<br>';
$amanha = new DateTime('-3 day');
echo strftime($formatoData2, $amanha->getTimestamp());


/*
    Alterando o TIMEZONE:
*/
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo '<br>';
echo $agora->format('d/M/y h:i:s');


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
