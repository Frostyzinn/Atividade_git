<?php

class Funcionario {
    private $nome;
    private $idade;
    private $cargo;

    public function __construct($nome, $idade, $cargo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cargo = $cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
}

?>