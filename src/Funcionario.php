<?php

class Funcionario {
    private $nome;
    private $idade;
    private $cargo;
    private $salario;
    private $departamento;

    public function __construct($nome, $idade, $cargo, $salario, $departamento) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->departamento = $departamento;
    }

s    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getDepartamento() {
        return $this->departamento;
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

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }
}

?>