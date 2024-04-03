<?php

Class Teatro{


    private $nomTeatro = [];
    private $dir = [];
    private $func = [];

    public function __construct($nombre,$direccion,$funcion)
    {
        $this->nomTeatro = $nombre;
        $this->dir = $direccion;
        $this->func = $funcion;
    }

    public function getNomTeatro(){
        return $this->nomTeatro;
    }
    public function setNomTeatro($n){
        $this->nomTeatro= array_push($n);
    }
    
    public function getDir()
    {
        return $this->dir;
    }
    public function setDir($d)
    {
        $this->dir = array_push($d);
    }

    public function getFunc(){
        return $this->func;
    }
    public function setFunc($f,$p){
        $this->func = array_replace($f,$p);
    }

    public function cambiarNombreTeatro($nuevoNombre){
        // $nomActual =$this->getNomTeatro();
        $this->setNomTeatro($nuevoNombre);
        
    }

    public function cambiarDireTeatro($nuevaDir){
        $this->setDir($nuevaDir);
    }

    public function agregarFuncion($nombreFun, $precio){
        $this->setFunc($nombreFun,$precio);
    }

    private function devolverArreglos($arreglo){
        $cadena = "";
        foreach($arreglo as $elemento){
            $cadena = $cadena . "|". $elemento;
            
        }
        return $cadena;
    }


    public function __toString()
    {
        $nombre = $this->devolverArreglos($this->getNomTeatro());
        $direccion = $this->devolverArreglos($this->getDir());
        $funcion =$this->devolverArreglos($this->getFunc());
        
        return "Teatro: " . $nombre . "\n" .
                "Direccion: " . $direccion . "\n" . 
                "Funciones y precios: " . $funcion . "\n" .
                print_r ($funcion);
            }

            
}