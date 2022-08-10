<?php

require_once('pessoa.php');
class Usuario extends Pessoa {
    public $login; // atributo diferente da classe pessoa, pois é mais específico.
    
    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade); 
        $this->login = $login;
        echo 'Usuário Criado! <br>';
    }

    function __destruct()
    {
        echo 'Usuário diz: Tchau!';
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}