<div class="titulo">Array como Mapa:</div>

<?php
echo '<small>';
echo 'Criando chaves para cada elemento do array: <hr>';
echo '<small>';
echo 'Será sempre "chave" = valor, conforme segue: <br> 
$dados = array("idade" => 25, "peso" => 70).<br>';
echo 'Realizando o print_r ($dados): <br>';

$dados = array("idade" => 25, "cor" => "verde", "peso" => 49.8);
print_r($dados);

echo '<br>';
echo 'Ao tentar utilizar indices para imprimir ou realizar operações, não será possível!
<br> Uma vez criadas as chaves, elas serão utilizadas para acessar as informações do array!';
echo '<br> Por exemplo, acessando a idade: print_r($dados["idade"]): <br>';

print_r($dados['idade']);
echo '</small>';

echo '<hr>';
echo 'Para adicionar elementos no array, basta: $dados[] = "elemento";<br>';
echo '<small>';

$dados[] = 'i';
print_r($dados);

echo '</small>';
echo '<hr>';
echo 'Para adicionar elementos com chave no array, basta: $dados["chave"] = "elemento";<br>';
echo '<small>';

$dados['altura'] = 1.80;
print_r($dados);

echo '</small>';

?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>