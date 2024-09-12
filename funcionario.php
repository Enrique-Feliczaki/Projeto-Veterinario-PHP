<?php
require_once "humano.php";
class Funcionario extends Humano{
    private $cargos;
    private $funcionario;

    
    public function __construct($cargos,Humano $funcionario)
    {
        $this->cargos = $cargos;
        $this->funcionario = $funcionario;
    }
    
    public function __toString()
    {
        Parent::__toString();
        return "Cargo: " . $this->cargos . "\n";
    }
}
class Balconista extends Funcionario{
    public $salario;
    public $balconista;

    public function __construct($salario,$balconista)
    {
        $this->salario = $salario;
        $this->balconista = $balconista;
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
}