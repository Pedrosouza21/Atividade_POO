<?php
require ("classes.php");

echo "Nome: ";
$nome = readline();
echo "Força: ";
$forca = (int)readline();
echo "Vida: ";
$vida = (int)readline()
;

$Heroi = new Heroi($nome, $forca, $vida);
echo "Nome: " . $Heroi -> getNome() . ". Força: " . $Heroi -> getForca() . ". Vida: " . $Heroi -> getVida() . ".";
?>