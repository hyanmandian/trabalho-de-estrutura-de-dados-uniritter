<?php
include_once '../Model/Session.php';

class ArvoreHeap {
    
    private $heap = array();
    
    public function __construct() {
        $arvoreHeap = Session::get("ArvoreHeap");
        if(!empty($arvoreHeap)){
            $this->heap = $arvoreHeap;
        }
    }

    public function inserir($sintoma) {
        array_unshift($this->heap, $sintoma);
        arsort($this->heap);
        Session::save("ArvoreHeap", $this->heap);
    }
    
}
