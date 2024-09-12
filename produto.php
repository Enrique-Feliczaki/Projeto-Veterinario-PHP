<?php
require_once "humano.php";
require_once "animal.php";

class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function __toString() {
        return "Produto: " . $this->nome . " - Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

class Venda {
    private $humano;
    private $produtos;

    public function __construct(Humano $humano, array $produtos) {
        $this->humano = $humano;
        $this->produtos = $produtos;
    }

    public function __toString() {
        $produtosStr = "";
        foreach ($this->produtos as $produto) {
            $produtosStr .= $produto;
        }
        return "Humano: " . $this->humano->getNome() . " realizou uma compra com os produtos:\n" . $produtosStr;
    }
}