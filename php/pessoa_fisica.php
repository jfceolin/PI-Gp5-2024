<?php

class PessoaFisica {

    private $cpf;
    private $dataNascimento;

    public function __construct($cpf, $dataNascimento) {
        $this->$cpf = $cpf;
        $this->$dataNascimento = $dataNascimento;
    }

    public function cadastrarProjetos(string $projeto) {

    }

    public function cadastrarTrabalhos(string $trabalho) {
    
    }
    
}

?>