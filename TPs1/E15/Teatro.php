<?php

class Teatro {
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nombre, $direccion, $funciones) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }

    // Métodos para obtener y cambiar el nombre del teatro
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Métodos para obtener y cambiar la dirección del teatro
    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    // Métodos para obtener y cambiar las funciones del teatro
    public function getFunciones() {
        return $this->funciones;
    }

    public function setFunciones($funciones) {
        $this->funciones = $funciones;
    }

    // Método para cambiar el nombre y precio de una función específica
    public function cambiarFuncion($indice, $nombre, $precio) {
        $this->funciones[$indice]["nombre"] = $nombre;
        $this->funciones[$indice]["precio"] = $precio;
    }

    private function devolverArreglos($arreglo){
        $cadena = "";
        foreach ($this->getFunciones() as $indice => $funcion) {
            $cadena =  "Función " . ($indice + 1) . ": " . $funcion["nombre"] . ", Precio: $" . $funcion["precio"] . "\n";
        }
        return $cadena;
    }
    public function __toString()
    {
        $cadena = $this->devolverArreglos($this->getFunciones());
        return $cadena;
    }

}

