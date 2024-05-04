<?php

include_once 'Persona.php';
include_once 'Cliente.php';
include 'Banco.php';
include 'Cuenta.php';
include 'ctaCte.php';
include 'ctaAhorro.php';


function testCrearCliente(){
    $objCliente1 = new Cliente ("38892401" , "Jorge" , "Rodriguez", 22);
    $objCliente2 = new Cliente ("28798415" , "Julian" , "Lopez", 23);
    $objColClientes = [ $objCliente1, $objCliente2];

    $objCuentaCte1 = new ctaCte (200, $objCliente1, 400);
    $objCuentaCte2 = new ctaCte (150, $objCliente2, 300);
    $objcuentasCtes = [$objCuentaCte1, $objCuentaCte2]; 

    $objCajaAhorro1 = new ctaAhorro ($objCliente1 , 300);
    $objCajaAhorro2 = new ctaAhorro ($objCliente1 , 150);
    $objCajaAhorro3 = new ctaAhorro ($objCliente2 , 400);

    $objCuentasAhorro = [$objCajaAhorro1, $objCajaAhorro2 , $objCajaAhorro3];

    $objBanco = new Banco ($objcuentasCtes , $objCuentasAhorro , 0 , $objColClientes);

    $nuevoCliente = new Cliente("38892402" , "fabian" , "perez", 24);
    $cargarCliente = $objBanco->incorporarCliente($nuevoCliente);
    if($cargarCliente){
        echo "Cliente ya existente";
    }else{
        echo "Cliente añadido";
    }

    echo $objBanco;

    echo $objBanco->buscarCliente(23);
    

}



function main(){
    testCrearCliente();
    
}

main();