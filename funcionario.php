<?php
require_once "humano.php";
class Funcionario extends Humano{

    private $funcionario;

    
    public function __construct(Humano $funcionario)
    {
        $this->funcionario = $funcionario;
    }
    public function __toString()
    {
        
    }
}
class Balconista extends Funcionario{
    public $salario;
    public $balconista;

    public function __construct($salario,Funcionario $balconista)
    {
        $this->salario = $salario;
        $this->balconista = $balconista;
    }
    public function __toString()
    {
        return "Cargo: " . $this->balconista . "\n" . "Salario: " . $this->salario . "\n";
    }
}

class Veterinario extends Funcionario{
    private $salario;
    private $veterinario;

    public function __construct($salario, $veterinario)
    {
        $this->salario = $salario;
        $this->veterinario = $veterinario;
    }
    public function __toString()
    {
        return "Cargo: " . $this->veterinario . "\n" . "Salario: " . $this->salario .  "\n";
    }

}