<div class="titulo">Integração CSS:</div>



<h2 center> <small>Tag Style integra o CSS em PHP e HTML</small> </h2>
<div> <?='<div center azul> Aplicando CSS, HTML e PHP na mesma linha'?></div>
<br>
<div center> <button><?="Botão em HTML com PHP"?></button></div>

<!-- TAG STYLE já linka todo o CSS. -->
<style>
    button {
        padding: 5px 20px;
        font-size: 1rem;
        font-weight: bold;
        color:#4286f4;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

</style>

<!-- Para inserir PHP dentro de HTML e CSS, é preciso utilizar a TAG PHP,
ou seja: -->
<br>
<?= '<div center> Tag PHP dentro de HTML </div>' ?>