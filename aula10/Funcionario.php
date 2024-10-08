<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;

    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($s) {
        $this->setor = $s;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setTrabalhando($e) {
        $this->trabalhando = $e;
    }

    public function mudarTrabalho() {
        $this->trabalhando = !$this->trabalhando;
    }
}
