<?php

Class Viaje{
    

    private $viajeCod;
    private $destino;
    private $maxCantP;
    private $pasajeros;

    public function __construct($codigoViaje , $destino, $capacidadMax , $aPasajeros)
    {
        $this->viajeCod = $codigoViaje; 
        $this->destino=$destino;
        $this->maxCantP= $capacidadMax;
        $this->pasajeros =$aPasajeros;  
    }

    public function getViajeCod(){
        return $this->viajeCod;
    }
    public function setViajeCod($codigoViaje){
        $this->viajeCod = $codigoViaje;
    }

    public function getDestino(){
        return $this->destino;
    }
    public function setDestino($destino){
        $this->destino = $destino;
    }

    public function getMaxCantP(){
        return $this->maxCantP;
    }
    public function setMaxCantP($capacidadMax){
        $this->maxCantP=$capacidadMax;
    }

    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function setPasajeros($aPasajeros){
        $this->pasajeros=$aPasajeros;
    }

    private function devolverArreglos($arreglo){
        $cadena= "\n";
        foreach ($arreglo as $elemento){
            $cadena =  $cadena . " " .$elemento . "\n";
        }
        return $cadena;
    }



    public function __toString()
    {
        $cadenaPasajeros= $this->devolverArreglos($this->getPasajeros());
        return $this->getViajeCod()." ".$this->getDestino() . " ". $this->getMaxCantP() . " ". $cadenaPasajeros;
    }
}