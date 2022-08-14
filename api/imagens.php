<div class="titulo">Upload de imagens</div>

<?php

echo '<small>';
echo 'Fazendo o upload de imagens via API e deixando visíveis: ';
echo '<small><br>';
echo 'O desafio é fazer o upload das imagens e fazer o display delas na tela:';
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
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/'; 
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;

    $tmp = $_FILES['arquivo']['tmp_name'];
    if (move_uploaded_file($tmp, $arquivo) and $_FILES['arquivo']['type'] === 'image/png') {
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

<ul>Imagens:
    <?php foreach($arquivos as $idx=>$arquivo): ?>
        <li>
            <img src="../files/<?= $arquivo ?>"
            alt="Imagem"
            title="Imagem do upload realizado.">
            </img>
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