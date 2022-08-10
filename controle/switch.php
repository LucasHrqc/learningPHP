<div class="titulo">Switch</div>

<?php
    echo '<small>';
    echo 'Modelo de escolha binário: <br><hr>';
    ?>

<form action="#" method="POST">
    <div>
        <label for="categoria"><small>Categoria:</small></label>
        <select name="categoria" id="categoria">
            <option value="Luxo"> Luxo</option>
            <option value="SUV"> SUV</option>
            <option value="Sedan"> Sedan</option>
            <option value="Outro"> Outro</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

isset($_POST['categoria']);
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : 'Inexistente';

if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} elseif ($categoria === 'Outro') {
    $carro = 'Mobi';
    $preco = 33000;
} else {
    $carro = 'N.A.';
    echo 'Nenhuma opção foi selecionada! <br>';
}

$precoFormatado = isset($preco) ? number_format($preco, 2, ',', '.') : 'N.A.';
echo '<small>';
echo "Carro: $carro <br> Preço: R$ $precoFormatado";
echo '</small>';
echo '</small><br><br>';

?>

<?php
    echo '<small>';
    echo 'Modelo SWITCH (verificar código): <br><hr>';
    ?>

<form action="#" method="POST">
    <div>
        <label for="categoria2"><small>Categoria:</small></label>
        <select name="categoria2" id="categoria2">
            <option value="Luxo"> Luxo</option>
            <option value="SUV"> SUV</option>
            <option value="Sedan"> Sedan</option>
            <option value="Outro"> Outro</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

$categoria2 = isset($_POST['categoria2']) ? $_POST['categoria2'] : 'Inexistente';

switch ($categoria2) {
    case 'Luxo':
    $carro1 = 'Mercedes';
    $preco1 = 250000;
    break;
    case 'SUV':
    $carro1 = 'Renegade';
    $preco1 = 80000;
    break;
    case'Sedan':
    $carro1 = 'Etios';
    $preco1 = 55000;
    break;
    case 'Outro':
    $carro1 = 'Mobi';
    $preco1 = 33000;
    break;
    case 'Inexistente':
    echo 'Nenhuma opção foi selecionada! <br>';
    $carro1 = 'N.A.';
    break;
}
$precoFormatado = isset($preco1) ? number_format($preco1, 2, ',', '.') : 'N.A.';
echo '<small>';
echo "Carro: $carro1 <br> Preço: R$ $precoFormatado";
echo '</small>';
echo '</small>';

?>

<style>
    hr {
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>