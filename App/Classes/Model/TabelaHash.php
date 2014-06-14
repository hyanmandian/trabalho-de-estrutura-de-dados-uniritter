<?php

class TabelaHash {

    const Tamanho = 4;

    public $hash = array();

    public function __construct() {
        for ($i = 0; $i < TabelaHash::Tamanho; $i++) {
            $this->hash[$i] = array();
        }
    }

    private function gerarChaveHash($cpf) {
        return $cpf % TabelaHash::Tamanho;
    }
    
    public function verificaCpf($cpf){
        $pacientes = $this->pesquisar($cpf);
        
        foreach($pacientes as $paciente){
            if($paciente->getCpf() == $cpf){
                return $paciente;
            }
        }
        
        return FALSE;
    }
    
    public function cadastrar($paciente) {
        if (count($this->hash) <= TabelaHash::Tamanho) {
            array_push($this->hash[$this->gerarChaveHash($paciente->getCpf())], $paciente);
        }
    }

    public function pesquisar($cpf) {
        $chaveHash = $this->gerarChaveHash($cpf);

        if (array_key_exists($chaveHash, $this->hash)) {
            return $this->hash[$chaveHash];
        }

        throw new Exception('Paciente não cadastrado');
    }

}
