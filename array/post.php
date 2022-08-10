<div class="titulo">POST</div>

<?php
    echo '<small>';
    echo 'O método POST pode ser utilizado através de um formulário: ';
    echo '<small><br>';
    echo 'form action="#" method="post" /form - sendo # uma âncora para manter no mesmo site.';
    echo '<br> Exemplo:';
?>

<form action="#" method="POST">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" >
        <option value="SC">Santa Catarina</option>;
        <option value="SP">São Paulo</option>;
        <option value="PR">Paraná</option>;
        <option value="RS">Rio Grande do Sul</option>;
    </select>
    <button>Enviar</button>
</form>

<?php
    echo 'Exemplo array GET: ';
    echo '<br>';
    print_r($_GET);
    echo '<br>';
    echo 'Exemplo array POST: ';
    echo '<br>';
    print_r($_POST);
    echo '</small><hr>';
?>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
</style>