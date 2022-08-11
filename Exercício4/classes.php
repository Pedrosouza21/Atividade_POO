<?php
class Carro
{
    private $velocidade;
    private $estadoDoMotor;
    
    public function __construct($estadoDoMotor = false, $velocidade = 0)
    {
        $this->estadoDoMotor=$estadoDoMotor;
        $this->velocidade=$velocidade;
    }
    public function setLigarCarro()
    {
        $this -> estadoDoMotor = true;
    }
    public function setDesligarCarro()
    {
        $this -> estadoDoMotor = false;
    }
    public function setAcelerar()
    {
        $this -> velocidade += 10;
    }
    public function setBrecar()
    {
        $this -> velocidade -= 10;
    }
}
?>