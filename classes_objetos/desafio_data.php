<div class="titulo">Desafio Data</div>

<?php

echo '<small>';
echo 'Elaborar uma classe com atributos e método para:';
echo '<small><br>';
echo 'Exibir a data no formato dia/mês/ano, tendo como padrão 01/01/1970.';
echo '<small><br>';

class data {
    public $dia = '01';
    public $mes = 'Jan';
    public $ano = '1970';

    public function mostrardata() {
        echo "A data é {$this->dia}/{$this->mes}/{$this->ano}.<br>";
    }
}
$objeto1 = new data;
$objeto1->mostrardata();
$niver = new data;
$niver->dia = '29';
$niver->mes = 'Set';
$niver->ano = '1996';
$niver->mostrardata();

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
