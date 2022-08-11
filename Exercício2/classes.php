<?php
class Heroi
{
    private $nome="";
    private $forca=0;
    private $vida=0;
    
    public function __construct($nome1, $forca1, $vida1)
    {
        $this->nome = $nome1;
        $this->forca = $forca1; 
        $this->vida = $vida1;
    }
        
        public function getNome()
        {
            return $this->nome;
        }
        public function getForca()
        {
            return $this->forca;
        }
        public function getVida()
        {
            return $this->vida;
        }
}
?>