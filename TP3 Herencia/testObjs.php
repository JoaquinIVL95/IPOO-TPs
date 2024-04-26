<?php

include_once 'Persona.php';
include_once 'Cliente.php';
include 'Banco.php';
include 'Cuenta.php';



function testCrearCliente(){
    $objCliente = new Cliente ("38892401" , "Jorge" , "Rodriguez", 22);
    
    $objCuenta = new Cuenta ($objCliente , 100000, "Corriente" , 40000);
    echo $objCuenta;
    echo "\n";

    
    echo "\n";
    $objCuenta->realizarDeposito(20000);
    echo $objCuenta->saldoCuenta();
    echo "\n";
    $retiroRealizado = $objCuenta->realizarRetiro(10000);
    echo $objCuenta->saldoCuenta();
    echo "\n";
    echo $retiroRealizado;

}



function main(){
    testCrearCliente();
    
}

main();