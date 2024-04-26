<?php

Class Cuenta{


    private $objPropietario;
    private $saldoDisponible;
    private $tipoCuenta;
    private $montoAlDescubierto;

    public function __construct($objCliente , $saldoDisponible, $tipoCuenta, $montoAlDescubierto)
    {
        $this->objPropietario = $objCliente;
        $this->saldoDisponible=$saldoDisponible;
        $this->tipoCuenta = $tipoCuenta;
        $this->montoAlDescubierto = $montoAlDescubierto;
    }


    public function  getObjPropietario()
    {
        return $this->objPropietario;
    }

    public function setObjPropietario($objPropietario){

        $this->objPropietario = $objPropietario;
    }

    public function getSaldoDisponible(){
        return $this->saldoDisponible;
    }
    public function setSaldoDisponible($saldoDisponible){
        $this->saldoDisponible = $saldoDisponible;
    }

    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;
    }

    public function getMontoAlDescubierto()
    {
        return $this->montoAlDescubierto;
    }
    public function setMontoAlDescubierto($montoAlDescubierto)
    {
        $this->montoAlDescubierto = $montoAlDescubierto;
    }

    public function saldoCuenta(){
        $saldo = $this->getSaldoDisponible();
        return $saldo;
    }

    public function realizarDeposito($monto){
        
        $saldoDisponible = $this->getSaldoDisponible();
        $montoDepositar = $saldoDisponible + $monto;
        
        $this->setSaldoDisponible($montoDepositar);
        
    }

    public function realizarRetiro($monto){
        $retiroRealizado = false;
        $saldoDisponible = $this->getSaldoDisponible();
        if ($monto <= $saldoDisponible){
            $retiro = $saldoDisponible - $monto;
            $this->setSaldoDisponible($retiro);
            $retiroRealizado = true;
        }
        return $retiroRealizado;
    }


    public function __toString()
    {
        return "Numero de cuenta " .  $this->getObjPropietario()->getNumCliente(). "\n" . 
        "Tipo de Cuenta: " . $this->getTipoCuenta() . "\n" .
        "Saldo disponible: " . $this->getSaldoDisponible() .  "\n" .  
        "Monto disponible para trasnferencia: " . $this->getMontoAlDescubierto();
    }
 

}