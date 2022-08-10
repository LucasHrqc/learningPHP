<div class="titulo">Visibilidade</div>

<?php

echo '<small>';
echo 'Utilizando os modificadores de acesso:';
echo '<small><br>';
echo 'Testar as teorias de encapsulamento de acordo com os modif. Lembrando que: ';
echo '<small><br>';
echo 'Public -> a variável é visível globalmente.<br>';
echo 'Protected -> a variável é visível para a classe e suas subclasses.<br>';
echo 'Public -> a variável é somente visível para a classe.<br><hr>';

class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        // A função naoMostrar() pode ser acessada dentro da classe e chamada aqui $this->naoMostrar().
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
}

// $a->protegido; Não é possível acessar fora da classe diretamente
// $a->privado;  Não é possível acessar fora da classe diretamente
$a = new A();
$a->mostrarA();
// $a->naoMostrar(); // Não irá acessar a função pois é privada!
echo 'É possível observar que todos os atributos do objeto $a são impressos, pois 
estão contidos na própria classe A.';

echo '</small><hr>';
echo 'Mostrando A a partir da classe B';
echo '<small><br>';

// Classe B - subclasse e Classe A - superclasse.
class B extends A {
    public function mostrarB () {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";
    }
}
$b = new B();
$b->mostrarA();

echo 'É possível observar que utilizando $b->mostrarA() exibe todos os componentes de A.
Isso acontece porque a função é publica, pois está dentro da classe A, onde os atributos Publico, Protegido e Privado
estão localizados.';

echo '</small><hr>';
echo 'Mostrando B a partir da classe B';
echo '<small><br>';

$b->mostrarB();

echo 'É possível observar que $b->mostrarB(), na classe B, consegue acessar o publico e protegido da classe A.
Porém não consegue acessar o privado da classe A, pois é restrito para a classe A e o erro acontece.';

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