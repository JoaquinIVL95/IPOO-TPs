<?php

Class ProductoImportado extends Producto{


    private $incremento;
    private $impuesto;

    public function __construct($codBarra,$descProducto,$stock,$porcIva,$precioCompra,$rubroP, $incremento, $impuesto)
    {
        parent::__construct($codBarra,$descProducto,$stock,$porcIva,$precioCompra,$rubroP);
        $this->incremento = $incremento;
        $this->impuesto = $impuesto;
    }

    public function getIncremento(){
        return $this->incremento;
    }
    public function setIncremento($incremento){
        $this->incremento = $incremento;
    }

    public function getImpuesto(){
        return $this->impuesto;
    }
    public function setImpuesto($impuesto){
        $this->impuesto = $impuesto;
    }

    public function darPrecioVenta()
    {
        $precioVenta = parent::darPrecioVenta();
        $precioVenta = $precioVenta + ($precioVenta * $this->getIncremento() / 100);
        $precioVenta = $precioVenta + ($precioVenta * $this->getImpuesto() / 100);
        return $precioVenta;
    }


    public function __toString()
    {
        return parent::__toString()."\nIncremento por producto importado: " . $this->getIncremento() . "\n" . 
        "Impuesto por importación: " . $this->getImpuesto() . "\n";
    }

    
}