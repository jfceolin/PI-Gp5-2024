<?php

class Usuario {

    private $nome;
    private $usuario;
    private $senha;
    private $ativo;

    public function __construct($nome, $usuario, $senha, $ativo) {
        $this->$nome = $nome;
        $this->$usuario = $usuario;
        $this->$senha = $senha;
        $this->$ativo = $ativo;
    }

    public function login($usuario, $senha) {

    }

    public function logoff() {
    
    }
    
}

?>