<div class="titulo">Desafio Switch:</div>

<?php
    echo '<small>';
    echo 'Elaborar um conversor de unidades através de um form/button:';
    echo '</small>';

?>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-mi">KM -> MI</option>
        <option value="mi-km">MI -> KM</option>
        <option value="m-km">M -> KM</option>
        <option value="km-m">KM -> M</option>
    </select>
    <button>Calcular</button>
</form>

<?php
echo '<small>';
$conv = $_POST['conversao'];
$valor = $_POST['param'];

switch ($conv) {
    case 'km-mi':
        $novoValor = $valor * 1.6;
        break;
    case 'mi-km':
        $novoValor = $valor / 1.6;
        break;
    case 'm-km':
        $novoValor = $valor / 1000;
        break;
    case 'km-m':
        $novoValor = $valor * 1000;
}

$limit1 = strpos($conv, '-');
$limit2 = strpos($conv, '-');
$dist1 = substr($conv, 0, $limit1);
$dist2 = substr($conv, $limit2+1);
$novoValor = number_format($novoValor, 1, '.', ',');
echo "$valor $dist1 equivalem a $novoValor $dist2.";
echo '</small>';
                
?>

<style>
    form > * {
        font-size: 1rem;
    }

    button, select {
        background-color: #dedede;
    }
</style>