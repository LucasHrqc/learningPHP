<div class="titulo">Membros Estáticos</div>

<?php

echo '<small>';
echo 'Definindo membros estáticos:';
echo '<small><br>';
echo 'Membros que pertencem à classe e não ao objeto através do static.';
echo '<small><br>';
echo 'No caso de atributos e métodos que pertencem a classe, 
TODOS os objetos(instâncias) criadas a partir desta classe terão um valor fixo 
para aquele atributo.<br>';
echo 'Exemplo: se a classe tem um atributo "public static $nome", 
significa que para TODOS os objetos criados a partir dessa classe, 
terão o mesmo atributo nome.';
echo '<br>';

class A {
    public $naoStatic = 'Variável de objeto (instância)';
    public static $static = 'Variável de classe ou seja, estática';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Acessando um atributo de classe (concatenar):
        echo "Estática = " . self::$static . "<br>";
    }
    // NÃOOOOOO é possível acessar um atributo de objeto com função de classe
    public static function mostrarStaticA() {
        echo "Estática = " . self::$static . "<br>";

    }
}

$objetoA = new A();
$objetoA->mostrarA();

echo '</small><hr>';
echo 'Acessando Estática através da função estática: ';
echo '<small><br>';
$objetoA->mostrarStaticA(); // NÃO É A FORMA IDEAL.
/* 
ABAIXO MOSTRA COMO ACESSAR ATRIBUTOS DIRETAMENTE PELA CLASSE.
NÃO É NECESSÁRIO CRIAR OBJETOS/INSTÂNCIAS PRA ACESSAR ATRIBUTOS DE CLASSE.
*/
A::mostrarStaticA(); // ou
echo A::$static;


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