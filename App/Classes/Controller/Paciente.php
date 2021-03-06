<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../Model/ModelPaciente.php";
include_once "../Model/TabelaHash.php";
include_once "../Model/ArvoreHeap.php";

class Paciente{
    private $paciente;
    
    public function __construct($paciente) {
        $this->paciente = new ModelPaciente($paciente["nome"], $paciente["cpf"], $paciente["idade"], $paciente["telefone"], $paciente["contato"]);
    }
    
    //Adiciona o paciente na fila de espera
    public function adicionarFila(){
        $arvoreHeap = new ArvoreHeap();
        $arvoreHeap->inserir(array($_POST["sintoma"],$this->paciente->getCpf()));
    }
    
    //Cadastra o paciente no sistema
    public function cadastrar(){
        $tabelaHash = new TabelaHash();
        $tabelaHash->cadastrar($this->paciente);
        $this->adicionarFila();
    }
    
    //Edita as informações do paciente
    public function editar(){
        $tabelaHash = new TabelaHash();
        $tabelaHash->editar($this->paciente);
        $this->adicionarFila();
    }
}

$paciente = new Paciente($_POST);
$paciente->cadastrar();

header("Location: ../../View/index.php");