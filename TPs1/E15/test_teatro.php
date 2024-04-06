<?php

include_once 'Teatro.php';

// Crear instancias de la clase Teatro
$funciones = array(
    array("nombre" => "hola mundo", "precio" => 10),
    array("nombre" => "la casa de carton", "precio" => 15),
    array("nombre" => "el señor de los gatitos", "precio" => 20),
    array("nombre" => "espejo blanco", "precio" => 25)
);

$objTeatro = new Teatro("El Pepe Botella", "roca 1100", $funciones);

// Cambiar el nombre del teatro
$objTeatro->setNombre("Colon");

// Cambiar la dirección del teatro
$objTeatro->setDireccion("san martin 1200");

// Cambiar el nombre y precio de una función específica
$objTeatro->cambiarFuncion(1, "poseidon", 18);

// Obtener el nombre y la dirección del teatro
echo "Nombre del Teatro: " . $objTeatro->getNombre() . "\n";
echo "Dirección del Teatro: " . $objTeatro->getDireccion() . "\n";

// Obtener las funciones del teatro
echo "Funciones del Teatro:\n";
echo $objTeatro;