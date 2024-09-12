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

    
    public function falar(){
        echo "falar";
    }

   public function __toString()
   {
    return "Nome: " . $this->nome . "\n" . "Raça: " . $this->raca . "\n" . "Quantidade de Patas: " . $this->quantidadePatas . "\n" . "Cor: " . $this->cor . "\n" . "Peso: " . $this->peso . "\n" . "Tamanho: " . $this->tamanho . "\n" . "Dono: " . $this->dono;
   }
  

}

class Cachorro extends Animal{
    public function falar(){
        echo "Chachorro falou: AuAu\n";
    }
}

class Orangotango extends Animal{
    public function falar()
    {
        echo "Orangotango falou: U-U-U-U-U-U-U-U-U-U\n";
    }
}

class Peixinho extends Animal{
    public function falar()
    {
        echo "Peixinho falou: Glub-Glub\n";
    }
}
