<?php

include_once 'Viaje.php';
include_once 'Personas.php';
include 'ResponsableV.php';



// $objResponsableV = new ResponsableV("123", "Licencia123", "Juan", "Perez");

$aPersonas = ["Juan" , "Ramon" , "Carina"];
$objPersonas = new Personas()
$objViaje = new Viaje("14","Neuquén",50,$aPersonas);


echo $objViaje;


while(true){
    echo "1. Cargar Datos Nuevos";
    echo "2. Modificar Datos Existentes";
    echo "3. Ver Datos Cargados";
    echo "4. Cerrar Programa";

    $opcion = trim(fgets(STDIN));

    switch ($opcion){
        case 1:
            // cargar nuevos datos
    }
}




