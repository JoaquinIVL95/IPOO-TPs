<?php


Class Rubro{


    private $nombreRubro;
    private $descripcion;
    private $porcentajeGanancia;

    public function __construct($nombreRubro, $descripcionRubro , $porcentajeGanancia)
    {
        $this->nombreRubro =  $nombreRubro;
        $this->descripcion =  $descripcionRubro;
        $this->porcentajeGanancia =  $porcentajeGanancia;
    }

    public function getNombreRubro(){
        return $this->nombreRubro;
    }

    public function setNombreRubro($nombreRubro){
        $this->nombreRubro = $nombreRubro;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getPorcGanancia(){
        return $this->porcentajeGanancia;
    }
    public function setPorcGanancia($porcentajeGanancia){
        $this->porcentajeGanancia = $porcentajeGanancia;
    }

    public function __toString()
    {
        return
        "rubro de ". $this->getNombreRubro(). "\n".
        "Descripción: ". $this->getDescripcion(). "\n".
        "Porcentaje de ganancia: ". $this->getPorcGanancia();
    }

}