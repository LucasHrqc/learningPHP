<div class="titulo">Upload de Arquivos</div>

<?php 

echo '<small>';
echo 'Fazendo Upload de arquivos através da API';
echo '<small><br>';
echo 'Para isso, usaremos post, get e files:';
echo '<small><br>';

/*
    PARA ENTENDER UM POUCO MELHOR:

    Array $_FILES conterá informações dos arquivos que serão
    enviados por upload.
    Array $_POST conterá os arquivos de uma requisição post (form).
    Array $_GET conterá os arquivos de uma requisição get a partir da URL.
*/

echo 'Files: '; 
print_r($_FILES);
echo '<br> Post: '; 
print_r($_POST);
echo '<br> Get: '; 
print_r($_GET);

/*
    REALIZANDO O UPLOAD
*/ 

if($_FILES and $_FILES['arquivo']) {
    $pastaUpload = '/Users/lukas/OneDrive/Área de Trabalho/LucasDev/teste/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<p> Arquivo válido e enviado com sucesso.</p>";
    } else {
        echo "<span>Erro no upload do arquivo!</span>";
    }
}

echo '</small></small><hr>';

?>

<!-- 
    Escrevendo um formulário com encode para suportar arquivos,
    para ser capaz de suportar arquivos.
 -->
<form action="#" method="post"
    enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>

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
    }

    input[type="file" i] {
        color: red;
        cursor: text;
    }

    p {
        color: green;
    }

    span {
        color: red;
        font-weight: 200;
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
