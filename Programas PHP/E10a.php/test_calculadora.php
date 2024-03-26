<?php

include 'calculadora.php';


$calculadora = new Calculadora(5,"/" , 0);
$calculadora2 = new Calculadora(5, "-", 4);
$calculadora3 = new Calculadora(10, "*", 2);
$calculadora4= new Calculadora(8, "/" , 4);
$calculadora5 = new Calculadora(0, "/", 4);
$calculadora6 = new Calculadora(4, "/" , 0);


echo $calculadora . "\n" ;
echo $calculadora2 . "\n" ;
echo $calculadora3 . "\n" ;
echo $calculadora4 . "\n" ;
echo $calculadora5  . "\n";
echo $calculadora6 . "\n" ;