<?php

class TabelaHash {

    const Tamanho = 20;

    private $hash = array();

    private function gerarChaveHash($cpf) {
        return $cpf % TabelaHash::Tamanho;
    }

    private function cadastrarProximaPosicao($pessoa, $chaveHash, $sair = FALSE) {
        $chaveHash = $chaveHash + 1;

        if (in_array($chaveHash, $this->hash)) {
            if ($chaveHash <= TabelaHash::Tamanho) {
                $this->cadastrarProximaPosicao($pessoa, $chaveHash);
            } else {
                if($sair == 1){
                    $this->cadastrarProximaPosicao($pessoa, 0, 1);
                } else{
                    $this->cadastrarProximaPosicao($pessoa, 0, 2);
                }
            }
        } elseif ($sair == 2) {
            throw new Exception('Tabela cheia!');
        } else {
            $this->hash[$chaveHash] = $pessoa;
        }
    }

    public function cadastrar($pessoa) {
        if (count($this->hash) <= TabelaHash::Tamanho) {
            if (in_array($this->gerarChaveHash($pessoa->cpf), $this->hash)) {
                $this->cadastrarProximaPosicao($pessoa, $pessoa->cpf);
            } else {
                $this->hash[$this->gerarChaveHash($pessoa->cpf)] = $pessoa;
            }
        } else {
            throw new Exception('Tabela cheia!');
        }
    }

    public function pesquisar($cpf) {
        $chaveHash = $this->gerarChaveHash($cpf);

        if (in_array($chaveHash, $this->hash)) {
            return $this->hash[$chaveHash];
        }

        throw new Exception('Tabela cheia!');
    }

}
