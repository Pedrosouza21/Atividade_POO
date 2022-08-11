<?php
class Calculadora{
 private $num1;
 private $num2;


public function somar($num1,$num2){
$total= $num1+$num2;
return $total;

}

function dividir($num1,$num2){
$total = $num1/$num2;
return $total;

}

function multiplicar($num1,$num2){
$total = $num1*$num2;
return $total;

}

function subtrair($num1,$num2){
$total = $num1-$num2;
return $total;

}

}



 


?>