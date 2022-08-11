<div class="titulo">Datas 01</div>

<?php

echo '<small>';
echo 'Utilizando a API para outras ';
echo '<small><br>';
echo 'Algumas outras funcionalidades do PHP.';
echo '<small><br>';

echo '</small>';
echo 'Função time(), passa a quantidade de segundos desde o marco zero:';
echo '<small><br>';
echo time() . '<hr>';

echo '</small>';
echo 'Função date(), passa data de hoje, em inglês:';
echo '<small><br>';
echo date('D, d \d\e M \d\e Y ') . '<br>';                  
echo strftime('%A, %d de %B de %Y', time()) . '<br>';       // Data por extenso
setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf-8');                 // Informando idioma local.
echo strftime('%A, %d de %B de %Y', time()) . '<br>';       
$amanha = time() + 24 * 60 * 60;                                        // Calculando a data de amanhã.
echo 'Amanhã: ' . strftime('%A, %d de %B de %Y', $amanha) . '<br>';     // echo data de amanhã.

$proximaSemana = strtotime('+1 week');                      // Passando uma semana.
echo 'Semana que vem: ' . strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';       

$dataFixa = mktime(15, 30, 50, 1, 29, 1996);                            // Data fixa.
echo 'Data Fixa: ' . strftime('%A, %d de %B de %Y', $dataFixa) . '<br>';

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