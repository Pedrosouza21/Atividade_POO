<?php

require ("classes.php");

echo "Tipo de chocolate: ";
$tipoChocolate = readline();
echo "Tamanho do ovo: ";
$tamanho = (int)readline();
echo "Número do ovo: ";
$numero = (int)readline();

$Nestle = new OvoPascoa($tipoChocolate, $tamanho, $numero);
echo "Tipo do chocolate: " . $Nestle -> getTipo() . ". Tamanho: " . $Nestle -> getTamanho() . " cm. Número: " . $Nestle -> getNum() . ".";

?>