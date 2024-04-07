<?php

Class Personas{


    private $nombre;
    private $apellido;
    private $dni;
    private $tel;

    public function __construct($nombre, $apellido, $dni, $telefono)
    {
          $this->nombre=$nombre;
          $this->apellido=$apellido;
          $this->dni=$dni;
          $this->tel=$telefono;
    }


    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombreNuevo){
        $this->nombre=$nombreNuevo;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellidoNuevo){
        $this->apellido=$apellidoNuevo;
    }

    public function getDni(){
        return $this->dni;
    }
    public function setDni($dniNuevo){
        $this->dni=$dniNuevo;
    }

    public function getTel(){
        return $this->tel;
    }
    public function setTel($telnuevo){
        $this->tel=$telnuevo;
    }


    
    

    public function __toString()
    {
        return  "Nombre: ". $this->getNombre(). "\n".
                "Apellidos: ". $this->getApellido(). "\n".
                "DNI: ". $this->getDni(). "\n".
                "Telefono: ". $this->getTel();
    
    }
}