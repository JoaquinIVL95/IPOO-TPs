<?php
include 'fecha.php';

$año = 1995;
$incFecha = 500;

$objFecha = new Fecha(8,2,2023,$incFecha);

echo $objFecha . "\n";


echo $objFecha->cantDiasMes() . "\n" ;

    



if ($objFecha->esBisiesto($objFecha->getAño()) == true){
    echo "El año " . $objFecha->getAño() . " es bisiesto \n";
}else{
    echo "El año " . $objFecha->getAño() . " no es bisiesto \n";
}

