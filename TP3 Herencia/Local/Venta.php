<?php

Class Venta {


    private $fechaVenta;
    private $colProducto;
    private $objCliente;
    private $importeTotal;

    public function __construct($fechaVenta, $colProducto, $objCliente, $importeTotal)
    {
        $this->fechaVenta = $fechaVenta;
        $this->colProducto = $colProducto;
        $this->objCliente = $objCliente;
        $this->importeTotal = $importeTotal;
    }


    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }
    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;
    }


    public function getColProducto()
    {
        return $this->colProducto;
    }
    public function setColProducto($colProducto)
    {
        $this->colProducto = $colProducto;
    }


    public function getObjCliente()
    {
        return $this->objCliente;
    }
    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;
    }


    public function getImporteTotal()
    {
        return $this->importeTotal;
    }
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;
    }


    private function devolverArreglos($arreglo){
        $cadena = "";
        foreach ($arreglo as $elemento){
            $cadena .= $elemento . " ";
        }
        return $cadena;
    }

    public function __toString()
    {
        return
            "Fecha de venta: " . $this->getFechaVenta() . "\n". 
            "Productos vendidos: " . $this->devolverArreglos($this->getColProducto()). "\n". 
            "Cliente: " . $this->getObjCliente() . "\n".
            "Importe total: " . $this->getImporteTotal() . "\n";
        }
}