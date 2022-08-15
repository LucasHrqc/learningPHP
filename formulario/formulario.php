<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulários</div>

<?php

ini_set('display_errors', 0);
echo '<small>';
echo 'Informações básicas sobre formulários: ';
echo '<small><br>';
echo 'Utilizando bootstrap pra poder estilizar e validando os dados:';
echo '<small><br>';

/* 
    Realizando as validações de dados:
*/
if(count($_POST) > 0) {
    if(!filter_input(INPUT_POST, "nome")) {
        $errors['nome'] = 'Nome é obrigatório';
    }
    
    if(!filter_input(INPUT_POST, "nascimento")) {
        $errors['nascimento'] = 'Data de nascimento é obrigatória!';
    } elseif(filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data) {
            $errors['data'] = 'Data deve estar no padrão dd/mm/aaaa!';
        }
    }
    
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'E-mail inválido!';
    }
    
    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $errors['site'] = 'Site inválido!';
    }
    
    $childrenConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $childrenConfig) 
    and $_POST['filhos'] != 0) {
        $errors['filhos'] = 'Quantidade de filhos inválida!';
    }
    
    $salaryConfig = [
        "options" => ["decimal" => ',']
    ];
    
    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salaryConfig)) {
        $errors['salario'] = 'Salário inválido!';
    }
}
    
echo '</small></small><hr>';

?>
<small>
    <h3>Cadastro</h3>
    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="nome">Nome</label>
                <input  
                class="form-control <?= $errors['nome'] ? 'is-invalid' : '' ?>" 
                type="text" 
                name="nome" 
                id="nome" placeholder="Ex: Lucas"
                value="<?= $_POST['nome'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['nome'] ?>
                </div>
            </div>
            <div class="form-group col-md-1">
                <label for="nascimento">Nascimento</label>
                <input  
                class="form-control <?= $errors['nascimento'] ? 'is-invalid' : '' ?> 
                <?= $errors['data'] ? 'is-invalid' : '' ?>"
                type="text" name="nascimento" 
                id="nascimento" placeholder="Ex: dd/mm/aaaa"
                value="<?= $_POST['nascimento'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['data'] ?>
                    <?= $errors['nascimento'] ?>
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="email">E-mail</label>
                <input  
                class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                type="text" name="email" 
                id="email" placeholder="Ex: exemplo@exemplo.com"
                value="<?= $_POST['email'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
            <div class="form-group col-md-">
                <label for="site">Site</label>
                <input  
                class="form-control <?= $errors['site'] ? 'is-invalid' : '' ?>"
                type="text"  name="site" 
                id="site" placeholder="Ex: https://exemplo.com.br"
                value="<?= $_POST['site'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['site'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="filhos">Quantidade de Filhos</label>
                <input  
                class="form-control <?= $errors['filhos'] ? 'is-invalid' : '' ?>"
                type="number"  name="filhos" 
                id="filhos" placeholder="Ex: 2"
                value="<?= $_POST['filhos'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['filhos'] ?>
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="salario">Salário</label>
                <input  
                class="form-control <?= $errors['salario'] ? 'is-invalid' : '' ?>"
                type="text"  name="salario" 
                id="salario" placeholder="Ex: 1200,50"
                value="<?= $_POST['salario'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['salario'] ?>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
    <hr>
    <h4>Outro exemplo de configuração do bootstrap</h4>
    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nome">Nome</label>
                <input  type="text" class="form-control" name="nome" 
                id="nome" placeholder="digite seu nome">
            </div>
            <div class="form-group col-md-3">
                <label for="nascimento">Nascimento</label>
                <input  type="text" class="form-control" name="nascimento" 
                id="nascimento" placeholder="digite a sua data de nascimento">
            </div>
            <div class="form-group col-md-3">
                <label for="email">E-mail</label>
                <input  type="text" class="form-control" name="email" 
                id="email" placeholder="digite seu email">
            </div>
            <div class="form-group col-md-3">
                <label for="site">Site</label>
                <input  type="text" class="form-control" name="site" 
                id="site" placeholder="digite o seu site">
            </div>
        </div>
    </form>
</small>

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
