<?php
include_once "../Model/Session.php";

class ModelPaciente {

    private $nome;
    private $cpf;
    private $idade;
    private $telefone;
    private $contato;
    
    public function __construct($nome, $cpf, $idade, $telefone, $contato) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->contato = $contato;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }
}
