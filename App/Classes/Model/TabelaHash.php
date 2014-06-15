<?php

class TabelaHash {

    const Tamanho = 4;

    private $hash = array();

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
        $this->hash[$this->gerarChaveHash($paciente->getCpf())][] = $paciente;;
    }
    
    private function verificaHash($chaveHash){
        foreach ($this->hash as $key => $value){
            if($key == $chaveHash){
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
    public function pesquisar($cpf) {
        $chaveHash = $this->gerarChaveHash($cpf);
    
        if ($this->verificaHash($chaveHash)) {
            return $this->hash[$chaveHash];
        }

        throw new Exception('Paciente não cadastrado');
    }

}
