<?php

class Humano{
    private $nome;
    private $idade;
    private $endereco;
    private $contato;

    public function __construct($nome,$idade,$endereco,$contato)
    {
        $this->nome =$nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

    public function __toString()
    {
        return "Nome: " . $this->nome . "\n" . "Idade: ". $this->idade . "\n" . "Endereco: ". $this->endereco . "\n" . "Contato: " . $this->contato . "\n";
    }
    
    public function getNome(){
        return $this->nome;
    }
}