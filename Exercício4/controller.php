<?php
require ("model.php");

$carro = new Carro($estadoDoMotor, $velocidade);

echo "" . $carro -> setLigarCarro() . "" ;
echo "" . $carro -> setAcelerar() . "" ;
echo "" . $carro -> setAcelerar() . "" ;
echo "<br>";
echo var_dump($carro);

?>