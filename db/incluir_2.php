<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Inclusão de dados</div>

<?php

ini_set('display_errors', 0);
echo '<small>';
echo 'Adding data to the database through table add button';
echo '<small><br>';
echo 'We need to apply the table HTML, create connection, check if the connection is 
established, create the DELETE condition and also create the INSERT condition';
echo '<small><br>';
echo '</small></small><hr>';

if(count($_POST) > 0) {
    $dados = $_POST;
    $errors = [];

    if(is_numeric($dados['nome'])) {
        $errors['nome'] = 'Nome deve ser caractere';
    }

    if(trim($dados['nome'] === "")) {
        $errors['nome'] = 'Nome é obrigatório';
    }

    if(!isset($dados['nascimento'])) {
        $errors['nascimento'] = 'Data de nascimento é obrigatória!';
    } elseif(filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if(!$data) {
            $errors['data'] = 'Data deve estar no padrão dd/mm/aaaa!';
        }
    }

    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'E-mail inválido!';
    }

    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $errors['site'] = 'Site inválido!';
    }

    $childrenConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];

    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $childrenConfig)
        and $dados['filhos'] != 0) {
        $errors['filhos'] = 'Quantidade de filhos inválida!';
    }

    $salaryConfig = [
        "options" => ["decimal" => ',']
    ];

    if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salaryConfig)) {
        $errors['salario'] = 'Salário inválido!';
    }
}

    if (!count($errors)) {
        require_once "conexao.php";
        $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
        VALUES (?, ?, ?, ?, ?, ?)";
        $connection = newConnection();
        $stmt = $connection->prepare($sql);
        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario']
        ];

        $stmt->bind_param("ssssid", ...$params);

        if ($stmt->execute()) {
            unset($dados);
        };
    }

?>


<small>
    <h5>Cadastro</h5>
    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="nome">Nome</label>
                <input
                class="form-control <?= $errors['nome'] ? 'is-invalid' : '' ?>"
                type="text"
                name="nome"
                id="nome" placeholder="Ex: Lucas"
                value="<?= $dados['nome'] ?>">
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
                value="<?= $dados['nascimento'] ?>">
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
                value="<?= $dados['email'] ?>">
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
                value="<?= $dados['site'] ?>">
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
                value="<?= $dados['filhos'] ?>">
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
                value="<?= $dados['salario'] ?>">
                <div class="invalid-feedback">
                    <?= $errors['salario'] ?>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
    <hr>
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







