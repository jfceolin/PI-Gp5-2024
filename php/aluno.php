<?php

class Aluno {

    private $idMatricula
    private $endereco;

    public function __construct($idMatricula, $endereco) {
        $this->$idMatricula = $idMatricula;
        $this->$endereco = $endereco;
    }

    // Autenticação do Aluno
    public function criarConta($dadosAluno) {

    }

    public function login($usuario, $senha) {

    }

    public function logout() {

    }
    //

    // Interação com o Curso
    public function assistirAula() {

    }

    public function visualizarMaterial() {

    }

    public function agendarProvas() {

    }

    public function visualizarNotas() {

    }

    public function uploadExercicios($documentosExercicios) {

    }

    // Financeiro
    public function solicitarBoletos() {

    }
    
}

?>