<div class="titulo">Download de Arquivos</div>

<?php

echo '<small>';
echo 'Fazendo o download de arquivos via API';
echo '<small><br>';
echo 'Não está sendo utilizado o back-end';
echo '<small><br>';

/*
    Iniciando a sessão e resgatando os arquivos, caso existentes,
    usando a $_SESSION['arquivos'];

    Indicando a pasta que será utilizada para fazer upload 
    dos arquivos, neste diretório, saindo e entrando em files.

    Armazenando o nome do arquivo para concatenar com o 
    resto do diretório em "pastaUpload"
*/ 
ini_set('display_errors', 0);
session_start();
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/'; 
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;

/*
    Pegando o diretório original da "página" e movendo para o 
    diretório desejado em files.

    Guardando o nome do arquivo na sessão.
*/
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<p> Arquivo válido e enviado com sucesso.</p>";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<span>Erro no upload do arquivo!</span>";
}

echo '</small></small><hr>';

?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <div class="upload">
        Upload:
        <input type="file" name="arquivo">
        <button>Enviar</button>
    </div>
</form>

<hr>

<ul>Download:
    <?php foreach($arquivos as $indice=>$arquivo): ?>
        <li>
            <a href="../files/<?= $arquivo ?>" >
                Arquivo <?= $indice . ': ' . $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    hr {
        width: 400px;
        margin: 15px 0px 5px 0px;
    }
    
    button {
        background-color: #dedede;
        border: 1px solid #999;
    }

    button:hover{
        border: 0px;
        border-color: white;
        box-shadow: 2px 2px 3px 1px gray;
        cursor: pointer;
    }

    #arquivo {
        font-style: inherit;
        font-family: inherit;
        cursor: text;
        height: 100%;
        margin-left: 10px;
    }

    input[type="file" i] {
        color: red;
    }

    p {
        color: green;
    }

    span {
        color: red;
        font-weight: 300;
    }

    .upload {
        font-size: 1.4rem;

    }

    form {
        margin: 0px;
        display: flex;
        flex-direction: row;
        width: fit-content;
        justify-content: left;
        align-items: top;
    }

    ul {
        font-size: 1.4rem;
        margin: 0px;
        padding: 0px;
        list-style-type: none;
    }
    ul a {
        color: black;
        text-decoration: none;
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