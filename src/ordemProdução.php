<?php

class OrdemProducao {
    private $numero;
    private $produto;
    private $quantidade;
    private $dataEmissao;
    private $status;

    public function __construct($numero, $produto, $quantidade, $dataEmissao, $status = "Aberta") {
        $this->numero = $numero;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->dataEmissao = $dataEmissao;
        $this->status = $status;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getDataEmissao() {
        return $this->dataEmissao;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setDataEmissao($dataEmissao) {
        $this->dataEmissao = $dataEmissao;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}

?>