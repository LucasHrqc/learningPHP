<div class="titulo">Erros personalizados</div>

<?php
echo '<small>';
echo 'Criando mensagens de erro personalizadas de acordo com exceções:';
echo '<small><br>';
echo 'Utilizada uma class que é instânciada em throw através de uma função.';
echo '<small><br><hr>';

/* 
    Abaixo segue como configurar um erro personalizado.
    Primeiro criando um construtor pra gerar a mensagem personalizada.
*/

class FaixaEtariaException extends Exception {
    public function __construct($message,  $code = 0, $previous = null) {
        // echo "Erro personalizado: $message <br>";
        parent::__construct($message, $code, $previous);    
    }
}

/* 
    Criando a função para instanciar com a subclasse e entrar com 
    as mensagens de erro personalizadas para as exceções
*/

function calcularTempoAposentadoria($idade) {
    if($idade < 18){
        throw new FaixaEtariaException(
            'Ainda está muito longe');
    }
    if($idade > 65) {
        throw new FaixaEtariaException('Já deveria estar aposentado');
    }
    return 65 - $idade;
}

/* 
    Criando o array de idades e percorrendo cada elemento 
    chamando a função e pegando a mensagem de erro 
    através do $e->getMessage()
*/

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes <br>";
    } catch (FaixaEtariaException $e) {
        echo "Não foi possível calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo 'Fim!';
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