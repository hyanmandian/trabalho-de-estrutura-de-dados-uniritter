<?php

class TabelaHash {

    const Tamanho = 20;

    private $hash = array();

    private function gerarChaveHash($cpf) {
        return $cpf % TabelaHash::Tamanho;
    }

    private function cadastrarProximaPosicao($pessoa, $chaveHash, $qtdVoltas = 0) {
        $chaveHash = $chaveHash + 1;

        if (in_array($chaveHash, $this->hash)) {
            if (count($this->hash) <= TabelaHash::Tamanho) {
                $this->cadastrarProximaPosicao($pessoa, $chaveHash);
            } else {
                $this->cadastrarProximaPosicao($pessoa, 0, $qtdVoltas++);
            }
        } elseif ($qtdVoltas > 1) {
            throw new Exception('Tabela cheia!');
        } else {
            $this->hash[$chaveHash] = $pessoa;
        }
    }

    public function cadastrar($pessoa) {
        if (count($this->hash) <= TabelaHash::Tamanho) {
            if (in_array($this->gerarChaveHash($pessoa->cpf), $this->hash)) {
                $this->cadastrarProximaPosicao($pessoa, $this->gerarChaveHash($pessoa->cpf));
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
