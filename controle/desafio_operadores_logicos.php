<div class="titulo">Desafio Operadores Lógicos:</div>

<?php

echo '<small>';
echo 'Dois trabalhos, um na terça e outro na quinta,
se os dois trabalhos forem executados, será comprada uma TV de 50 polegadas
e tomaremos sorvete. Se apenas um deles for executado, será comprada
uma TV de 32 polegadas e tomaremos sorvete. Caso nenhum dos dois trabalhos for
executado, ficaremos em casa e mais saudáveis: <br><br>';



echo '</small>';
?>

<form action="#" method="post">
    <div>
        <label for="t1"><small>Trabalho 1 (Terça):</small></label>
        <select name="t1" id="t1">
            <option value="1"> Executado</option>
            <option value="0"> Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2"><small>Trabalho 2 (Quinta):</small></label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>

button, select {
    font-size: 1.2rem;
    background-color: #dedede;
}

hr {
    margin-top: 5px;
    margin-bottom: 5px;
}
</style>

<?php

$trabalho1 = !!$_POST['t1'];
$trabalho2 = !!$_POST['t2'];
echo '<small>';
if ($trabalho1 == true and $trabalho2 == true) {
    echo "Será comprada a TV de 50' e tomaremos sorvete!";
} elseif ($trabalho1 == true or $trabalho2 == true) {
    echo "Será comprada a TV de 32' e tomaremos sorvete!";
} else {
    echo "Não será comprada TV e não tomaremos sorvete e seremos mais saudável!";
}
'</small>'

?>