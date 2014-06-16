<?php
session_start();
class Session {

    public static function save($id, $data) {
        $_SESSION[$id] = $data;
    }

    public static function get($id) {
        return $_SESSION[$id];
    }
    
    public static function getPaciente($cpf){
        $tabelaHash = Session::get("TabelaHash");
        foreach($tabelaHash as $pacientes){
            foreach($pacientes as $paciente){
                if($paciente->getCpf() == $cpf){
                    return $paciente;
                }
            }
        }
    }
    
    public static function remove($id){
        foreach($_SESSION[$id[0]] as $key => $value){
            if($value[1] == $id[1]){
                unset($_SESSION[$id[0]][$key]);
                return ;
            }
        }
    }
}
