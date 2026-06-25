<?php

class Produto {
    private $id;
    private $nome;
    private $preco;
    private $quantidadeEstoque;
    private $categoria;

    public function __construct($id, $nome, $preco, $quantidadeEstoque, $categoria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
        $this->categoria = $categoria;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidadeEstoque() {
        return $this->quantidadeEstoque;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setQuantidadeEstoque($quantidadeEstoque) {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
}

?>