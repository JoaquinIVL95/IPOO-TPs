<?php

include 'cuentaBancaria.php';

$objCuentaBanco = new cuentaBancaria(290,"2038892401",20000,20);

echo $objCuentaBanco . "\n";

$objCuentaBanco->actualizarSaldo();
echo $objCuentaBanco->getCuentaSaldo() . "\n";

$objCuentaBanco->depositar(5000);
echo $objCuentaBanco->getCuentaSaldo(). "\n";

if($objCuentaBanco->retirar(0) == true ){
    echo "Retiro exitoso, saldo disponible restante: ". "\n";
    echo $objCuentaBanco->getCuentaSaldo() . "\n";

}else{
    echo "Saldo insuficiente";
}

