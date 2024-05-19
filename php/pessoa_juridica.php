<?php

class PessoaJuridica {

    private $cnpj;
    private $razaoSocial;

    public function __construct($cnpj, $razaoSocial) {
        $this->$cnpj = $cnpj;
        $this->$razaoSocial = $razaoSocial;
    }

    public function acessarContratos(string $contrato) {

    }

    public function uploadNotaFiscal(int $notaFiscal) {
    
    }
    
}

?>