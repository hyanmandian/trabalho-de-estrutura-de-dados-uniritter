<?php

include_once '../Model/Session.php';

class TabelaHash {

    const Tamanho = 5;

    private $hash = array();

    public function __construct() {
        $tabelaSession = Session::get("TabelaHash");
        
        if(!empty($tabelaSession)){
            $this->hash = $tabelaSession;
        }
        //Adicona o valor array para todas as posições da tabela
        for ($i = 0; $i < TabelaHash::Tamanho; $i++) {
            if(empty($this->hash[$i])){
                $this->hash[$i] = array();
            }
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
        $pacientes = $this->hash[$this->gerarChaveHash($paciente->getCpf())];
        
        foreach($pacientes as $key => $value){
            if ($value->getCpf() == $paciente->getCpf()){
                $this->hash[$this->gerarChaveHash($paciente->getCpf())][$key] = $paciente;
                Session::save("TabelaHash", $this->hash);
                return ;
            }
        }
        
        $this->hash[$this->gerarChaveHash($paciente->getCpf())][] = $paciente;
        Session::save("TabelaHash", $this->hash);
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
