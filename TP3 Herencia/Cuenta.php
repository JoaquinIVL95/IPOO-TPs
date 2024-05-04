<?php

Class Cuenta{


    private $objPropietario;
    private $saldoDisponible;


    public function __construct($objCliente , $saldoDisponible)
    {
        $this->objPropietario = $objCliente;
        $this->saldoDisponible=$saldoDisponible;
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
        return "Propietario: " .  $this->getObjPropietario(). "\n" .
        "Saldo disponible: " . $this->getSaldoDisponible() .  "\n" ;
    }
 

}