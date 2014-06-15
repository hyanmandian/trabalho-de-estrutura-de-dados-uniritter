<?php
include_once '../Model/Session.php';
class Consulta {

    private $cpf;
    private $data;
    private $cor;
    private $diagnostico;

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    
    public function getCpf() {
        return $this->$cpf;
    }

    public function setCpf($cpf) {
        $this->$cpf = $cpf;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getDiagnostico() {
        return $this->diagnostico;
    }

    public function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

}
