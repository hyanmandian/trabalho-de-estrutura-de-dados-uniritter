<?php

class TabelaHash {

    const Tamanho = 20;

    public $hash = array();

    private function gerarChaveHash($cpf) {
        return $cpf % TabelaHash::Tamanho;
    }

    private function cadastrarProximaPosicao($paciente, $chaveHash, $qtdVoltas = 0) {
        $chaveHash = $chaveHash + 1;

        if (array_key_exists($chaveHash, $this->hash)) {
            if (count($this->hash) <= TabelaHash::Tamanho) {
                $this->cadastrarProximaPosicao($paciente, $chaveHash);
            } else {
                $this->cadastrarProximaPosicao($paciente, 0, $qtdVoltas++);
            }
        } elseif ($qtdVoltas > 1) {
            throw new Exception('Tabela cheia!');
        } else {
            $this->hash[$chaveHash] = $paciente;
        }
    }

    public function cadastrar($paciente) {
        if (count($this->hash) <= TabelaHash::Tamanho) {
            if (array_key_exists($this->gerarChaveHash($paciente->getCpf()), $this->hash)) {
                $this->cadastrarProximaPosicao($paciente, $this->gerarChaveHash($paciente->getCpf()));
            } else {
                $this->hash[$this->gerarChaveHash($paciente->getCpf())] = $paciente;
            }
        } else {
            throw new Exception('Tabela cheia!');
        }
    }

    public function pesquisar($cpf) {
        $chaveHash = $this->gerarChaveHash($cpf);

        if (array_key_exists($chaveHash, $this->hash)) {
            return $this->hash[$chaveHash];
        }

        throw new Exception('Tabela cheia!');
    }

}
