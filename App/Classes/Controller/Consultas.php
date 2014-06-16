<?php
include_once "../Model/ArvoreHeap.php";

class Consultas{
    private $consultas = array();
    
    public function __construct() {
        $consulta = Session::get("Consultas");
        if(!empty($consulta)){
            $this->consultas = $consulta;
        }
    }
    
    //Salva a consulta do paciente
    public function salvar($consulta){
        $this->consultas[] = $consulta;
        Session::save("Consultas", $this->consultas);
        Session::remove(array("ArvoreHeap", $_POST["cpf"]));
    }
}

$consultas = new Consultas();
$consultas->salvar($_POST);

header("Location: ../../View/index.php");