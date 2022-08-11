<?php
class OvoPascoa
{
    private $tipoChocolate;
    private $tamanho;
    private $numero;
    
    public function __construct($tipoChocolate1, $tamanho1, $numero1)
    {
        $this ->tipoChocolate = $tipoChocolate1;
        $this ->tamanho = $tamanho1;
        $this ->numero = $numero1;
    }
    public function getTipo()
    {
        return $this ->tipoChocolate;
    }
    public function getTamanho()
    {
        return $this ->tamanho;
    }
    public function getNum()
    {
        return $this ->numero;
    }
}
?>