<?php


Class ctaAhorro extends Cuenta{


    public function __construct($objPropietario , $saldoDisponible)
    {
        parent::__construct($objPropietario , $saldoDisponible);
    }


    public function __toString()
    {   
        $cadena = parent::__toString();
        $cadena .= "Cuenta de Ahorro \n"; 
        return $cadena;
    }
}