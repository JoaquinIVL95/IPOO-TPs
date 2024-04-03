<?php

include_once 'Teatro.php';

$nombreTeatro = ["Circo" ,];
$direccionTeatro = ["Leloir 123", ];
$funcion = [
    ["nombre" => "Hola Mundo" , "precio" => 50],        
];

$objTeatro = new Teatro($nombreTeatro,$direccionTeatro,$funcion);

echo $objTeatro;