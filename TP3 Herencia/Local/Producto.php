<?php

Class Producto {

    private $codBarra;
    private $descProducto;
    private $stock;
    private $porcIva;
    private $precioCompra;
    private $objRubroP;

    public function __construct($codBarra,$descProducto,$stock,$porcIva,$precioCompra,$rubroP)
    {
        $this->codBarra = $codBarra;
        $this->descProducto = $descProducto;
        $this->stock = $stock;
        $this->porcIva = $porcIva;
        $this->precioCompra = $precioCompra;
        $this->objRubroP = $rubroP;
    }


    public function getCodBarra(){
        return $this->codBarra;
    }
    public function setCodBarra($codBarra){
        $this->codBarra = $codBarra;
    }

    public function getDescProducto(){
        return $this->descProducto;
    }
    public function setDescProducto($descProducto){
        $this->descProducto = $descProducto;
    }

    public function getStock(){
        return $this->stock;
    }
    public function setStock($stock){
        $this->stock = $stock;    
    }

    public function getPorcIva(){
        return $this->porcIva;
    }
    public function setPorcIva($porcIva){
        $this->porcIva = $porcIva;
    }

    public function getPrecioCompra(){
        return $this->precioCompra;
    }
    public function setPrecioCompra($precioCompra){
        $this->precioCompra = $precioCompra;
    }

    public function getRubroP(){
        return $this->objRubroP;
    }
    public function setRubroP($objRubroP){
        $this->objRubroP = $objRubroP;
    }
    
    public function __toString()
    {
        return
            "Codigo de barra: " . $this->getCodBarra() . "\n" . 
            "Descripcion del producto: " . $this->getDescProducto() . "\n" . 
            "Stock: " . $this->getStock(). "\n" . 
            "Porcentaje de IVA: " . $this->getPorcIva() . "\n" . 
            "Precio de compra: " . $this->getPrecioCompra() . "\n" .
            "Pertenece al " . $this->getRubroP() . "\n" ;
    }


}