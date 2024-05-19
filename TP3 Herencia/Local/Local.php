<?php


Class Local {

    private $colProductosStock;
    private $colClientes;
    private $colVentas;
    
    public function __construct($colProductosStock)
    {
        $this->colProductosStock = $colProductosStock;
    }


    public function getColProductoStock(){
        return $this->colProductosStock;
    }
    public function setColProductoStock($colProductosStock){
        $this->colProductosStock = $colProductosStock;
    }


    public function incorporarProductoLocal($objProducto) {
        $listaProductos = $this->getColProductoStock();
        $codigoBarra = $objProducto->getCodBarra();
        $i = 0;
        $n = count($listaProductos);
        $prodEncontrado = false;
        $agregado = -1;
        
        while ($i < $n && !$prodEncontrado) {
            $codigoBarraLista = $listaProductos[$i]->getCodBarra();
            if ($codigoBarraLista == $codigoBarra) {
                $prodEncontrado = true;
            } else {
                $i++;
            }
        }
        
        if ($prodEncontrado == false) {
            $listaProductos[] = $objProducto;
            $this->setColProductoStock($listaProductos);
            $agregado = 1;
        }
    
        return $agregado;
    }


    public function retornarImporteProducto($objProducto){
        $listaProductos = $this->getColProductoStock();
        $codigoBarra = $objProducto->getCodBarra();
        $i = 0;
        $n = count($listaProductos);
        $importe = 0;
        $prodEncontrado = false;

        while($i < $n && !$prodEncontrado){
            $codigoBarraLista = $listaProductos[$i]->getCodBarra();
            if($codigoBarraLista == $codigoBarra){
                $importe = $listaProductos[$i]->darPrecioVenta();
                $prodEncontrado = true;
            }else{
                $i++;
            }
            
        }
        return $importe;    
    }

    public function retornarCostoProductoLocal(){
        $listaProductos = $this->getColProductoStock();
        $costo = 0;
        $precioProducto=0;
        $n = count($listaProductos);
        $i = 0;
        $stock = 0;
        while($i < $n){
            
            $stock = $listaProductos[$i]->getStock();
            $precioProducto += $listaProductos[$i]->darPrecioVenta();
            $costo = $precioProducto * $stock;
            $i++;
        }

        return $costo;

    }


    public function darImporteVenta(){
        
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
        return "Stock almacenado en el Local: " . $this->devolverArreglos($this->getColProductoStock());
    }
}   