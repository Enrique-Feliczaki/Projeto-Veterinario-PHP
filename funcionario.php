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
        return $this->funcionario . "\n\n";
    }
}
class Balconista extends Funcionario{
    public $salario;
    public $balconista;

    public function __construct($salario,Funcionario $balconista)
    {
        parent::__construct($balconista);
        $this->salario = $salario;
        $this->balconista = $balconista;
    }
    public function __toString()
    {
    return "Cargo: Balconista\n" . "Funcionario: " . $this->balconista . "\n" . "Salario: " . $this->salario . "\n\n";
    }
}

class Veterinario extends Funcionario{
    private $salario;
    private $veterinario;

    public function __construct($salario, Funcionario $veterinario)
    {
        parent::__construct($veterinario);
        $this->salario = $salario;
        $this->veterinario = $veterinario;
    }
    public function __toString()
    {
        return "Cargo: Veterinario\n" . "Funcionario: " . $this->veterinario . "\n" . "Salario: " . $this->salario . "\n\n";
    }   
    }
    class Vendedor extends Funcionario{
        private $salario;
        private $vendedor;
    
        public function __construct($salario, Funcionario $vendedor)
        {
            parent::__construct($vendedor);
            $this->salario = $salario;
            $this->vendedor = $vendedor;
        }
        public function __toString()
        {
            return "Cargo: Vendedor\n" . "Funcionario: " . $this->vendedor . "\n" . "Salario: " . $this->salario . "\n";
        }   
    
    }

