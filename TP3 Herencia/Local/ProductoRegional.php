<?php


Class ProductoRegional extends Producto{

    private $descuentoProducto;

    public function __construct($codBarra,$descProducto,$stock,$porcIva,$precioCompra,$rubroP, $descuentoProducto)
    {
        parent::__construct($codBarra,$descProducto,$stock,$porcIva,$precioCompra,$rubroP);
        $this->descuentoProducto = $descuentoProducto;
    }



    public function getDescuentoProducto(){
        return $this->descuentoProducto;
    }
    public function setDescuentoProducto($descuentoProducto){
        $this->descuentoProducto = $descuentoProducto;
    }

    public function darPrecioVenta()
    {
        $precioVenta = parent::darPrecioVenta();
        $precioVenta = $precioVenta - ($precioVenta * $this->descuentoProducto / 100);
        return $precioVenta;
    }



    public function __toString()
    {
        return parent::__toString()."\nDescuento por producto regional: ".$this->getDescuentoProducto() . "\n";
    }
}