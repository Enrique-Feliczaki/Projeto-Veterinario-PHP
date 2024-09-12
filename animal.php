<?php
     require_once "index.php";
class Animal{
    private $nome;
    private $raca;
    private $quantidadePatas;
    private $cor;
    private $peso;
    private $tamanho;
    private $dono;

    public function __construct($nome,$raca,$quantidadePatas,$cor,$peso,$tamanho, Humano $dono)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->quantidadePatas=$quantidadePatas;
        $this->cor = $cor;
        $this->peso =$peso;
        $this->tamanho = $tamanho;
        $this->dono = $dono;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getRaca(){
        return $this->raca;
    }
    public function getQuantidadePatas(){
        return $this->quantidadePatas;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getTamanho(){
        return $this->tamanho;
    }

    public function falar(){
        echo "falar";
    }
}

class Cachorro extends Animal{
    public function falar(){
        echo "Auau\n";
    }
}

class Orangotango extends Animal{
    public function falar()
    {
        echo "U-U-U-U-U-U-U-U-U-U\n";
    }
}

class Peixinho extends Animal{
    public function falar()
    {
        echo "Glub-Glub\n";
    }
}
