<?php

Class Viaje{
    

    private $viajeCod;
    private $destino;
    private $maxCantP;
    private $pasajeros;
    private $responsable;

    public function __construct($codigoViaje , $destino, $capacidadMax )
    {
        $this->viajeCod = $codigoViaje; 
        $this->destino=$destino;
        $this->maxCantP= $capacidadMax;
        $this->responsable = array();  
        $this->pasajeros = array();
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

    public function getResponsable(){
        return $this->responsable;
    }
    public function setResponsable($responsable){
        $this->responsable=$responsable;
    }

    public function agregarResponsable(ResponsableV $responsableV){
        $error = false;
        $responsable = $this->getResponsable();
        foreach ($responsable as $p) {
            if ($p->getDniResp() == $responsableV->getDniResp()) {
                $error = true;
                
            }
        }
        if (!$error) {
            $this->responsable[] = $responsableV;
        }
        return $error;
    }


    public function agregarPasajeros(Personas $pasajero){
        $error = false;
        $pasajeros = $this->getPasajeros();
        foreach ($pasajeros as $p) {
            if ($p->getDni() == $pasajero->getDni()) {
                $error = true;
                
            }
        }
        if (!$error) {
            $this->pasajeros[] = $pasajero;
        }
        return $error;
    }



    public function eliminarPasajero($dni) {
        $pasajeros = $this->getPasajeros();
        $eliminado = false;
        foreach ($pasajeros as $index => $pasajero) {
            if ($pasajero->getDni() == $dni) {
                unset($this->pasajeros[$index]);
                return true; // Elemento encontrado y eliminado
            }
        }
        return false; // Elemento no encontrado
    }




    public function listaPasajeros(){
        $lista = $this->getPasajeros();
        $cadena = $this->devolverArreglos($lista);

        return $cadena;
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
        // $cadenaPasajeros= $this->devolverArreglos($this->getPasajeros());
        return "Codigo del viaje N° " .  $this->getViajeCod(). "\n". " Con destino a ".$this->getDestino(). "\n" . " La capacidad maxima de pasajeros es de ". $this->getMaxCantP() . " personas \n";
    }
}