<?php

Class Banco{



    private $colCuentaCorriente;
    private $colCajaAhorro;
    private $ultimoValorCuentaAsignado;
    private $colCliente;

    public function __construct($colCtaCte , $colCajaAhorro , $ultimoValorCuentaAsignado , $colCliente)
    {
        $this->colCuentaCorriente = $colCtaCte;
        $this->colCajaAhorro = $colCajaAhorro ;
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;
        $this->colCliente = $colCliente;
    }


    public function getColCuentaCorriente()
    {
        return $this->colCuentaCorriente;
    }
    public function setColCuentaCorriente($colCuentaCorriente)
    {
        $this->colCuentaCorriente = $colCuentaCorriente;

    }

    public function getColCajaAhorro()
    {
        return $this->colCajaAhorro;
    }
    public function setColCajaAhorro($colCajaAhorro)
    {
        $this->colCajaAhorro = $colCajaAhorro;

    }

    public function getUltimoValorCuentaAsignado()
    {
        return $this->ultimoValorCuentaAsignado;
    }
    public function setUltimoValorCuentaAsignado($ultimoValorCuentaAsignado)
    {
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;

      
    }


    public function getColCliente()
    {
        return $this->colCliente;
    }
    public function setColCliente($colCliente)
    {
        $this->colCliente = $colCliente;

  
    }

    public function incorporarCliente($objCliente){
        $clienteExistente = false;
        $colClientes = $this->getColCliente();
        $i = 0;
        $n = count($colClientes);
        while($i <= $n && $clienteExistente != true){
            if($colClientes == $objCliente){
                $clienteExistente = true;
            }else{
                $i++;
            }
            
        }

        if($clienteExistente == false){
            // array_push($this->colCliente, $objCliente);
            $colClientes[]=$objCliente;
            $this->setColCliente($colClientes);
        }
        return $clienteExistente;

    }

    public function buscarCliente($numCliente){
        $colClientes = $this->getColCliente();
        
        $clienteExistente = false;
        $cantClientes = count($this->getColCliente());
        $indice = 0;
        $indiceCliente = -1;
        
        
        while ($indice <= $cantClientes && $clienteExistente != true){
            if ($numCliente == $colClientes[$indice]->getNumCliente()){
                $clienteExistente = true;
                $indiceCliente = $indice;
                
            }else{
                $indice++;
                
            }

        }
        return $indiceCliente;
    }


    public function incorporarCuentaCorriente($numCliente , $montoDescubierto){
        $clienteExistente = $this->buscarCliente($numCliente);
        $cliente = $this->getColCliente()[$clienteExistente];
        $cuentaCreada = false;
        $colCtaCte = $this->getColCuentaCorriente();

        if($clienteExistente >-1){
            $nuevaCuenta = new ctaCte($montoDescubierto,$cliente, 100);
            $cuentaCreada = true;
            $colCtaCte[] = $nuevaCuenta;
            $this->setColCuentaCorriente($colCtaCte);
        }

        return $cuentaCreada;
    }

    public function incorporarCajaDeAhorro($numCliente){
        $clienteExistente = $this->buscarCliente($numCliente);
        $cliente = $this->getColCliente()[$clienteExistente];
        $cuentaCreada = false;
        $colCajaAhorro = $this->getColCajaAhorro();

        if($clienteExistente >-1){
            $nuevaCuenta = new ctaAhorro($cliente, 100);
            $cuentaCreada = true;
            $colCajaAhorro[] = $nuevaCuenta;
            $this->setColCajaAhorro($colCajaAhorro);
        }

        return $cuentaCreada;
    }




    private function leerArreglos($arreglo){
        $cadena = " ";
        foreach ($arreglo as $value) {
            $cadena .= $value . " \n";
        }
        return $cadena;
    }

    public function __toString()
    {
        return " // " . $this->leerArreglos($this->getColCuentaCorriente()) . "\n". 
        " Cta Ahorro: " . $this->leerArreglos($this->getColCajaAhorro()). "\n".  
        " Ultimo Valor Asignado: ". $this->getUltimoValorCuentaAsignado() . "\n". 
        " Clientes: \n" . $this->leerArreglos($this->getColCliente()). "\n";
    }
}