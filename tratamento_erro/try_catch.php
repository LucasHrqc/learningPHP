<div class="titulo">Try and Catch</div>

<?php

echo '<small>';
echo 'Lidando com erros através de blocos try and catch';
echo '<small><br>';
echo 'Por exemplo, o erro echo intdiv(7, 0);';
echo '<small><br>';

/*
    Bloco TRY utilizado para códigos com possíveis erros.
*/

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Teve um erro aqui <br>';
}

try {
    throw new Exception ('Um erro muito estranho aconteceu');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero <br>';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Finally sempre executado! <br>';
}

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