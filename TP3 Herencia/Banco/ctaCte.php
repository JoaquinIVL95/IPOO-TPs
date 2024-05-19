<?php


Class ctaCte extends Cuenta {


    private $montoAlDescubierto;

    public function __construct($montoAlDescubierto, $objPropietario, $saldoDisponible)
    {
        parent::__construct($objPropietario,$saldoDisponible);
        $this->montoAlDescubierto = $montoAlDescubierto;

    }

    public function getMontoAlDescubierto()
    {
        return $this->montoAlDescubierto;
    }
    public function setMontoAlDescubierto($montoAlDescubierto)
    {
        $this->montoAlDescubierto = $montoAlDescubierto;
    }


    public function __toString()
    {
        $cadena =parent::__toString();
        $cadena .= "Monto disponible para girar: " . $this->getMontoAlDescubierto();
        return $cadena;
    }
}