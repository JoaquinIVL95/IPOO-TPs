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
        // $numClienteExistente = [];
        $clienteExistente = false;
        $cantClientes = count($this->getColCliente());
        $indice = 0;
        $indiceCliente = -1;
        
        // foreach($colClientes as $cliente){
        //     $numClienteExistente = $cliente->getNumCliente();
        // }

        while ($indice <= $cantClientes && $clienteExistente != true){
            if ($numCliente == $colClientes[$indice]->getNumCliente()){
                $clienteExistente = true;
                $indiceCliente = $indice;
                
            }else{
                $indice++;
                echo "perro";
            }

        }
        return $indiceCliente . " numero indice";
    }


    public function incorporarCuentaCorriente($numCliente , $montoDescubierto){
        $colClientes = $this->getColCliente();
        $clienteExistente = $this->buscarCliente($numCliente);

        if($clienteExistente != null){
            $cliente = $this->getColCliente()[$clienteExistente];
            echo $this->leerArreglos($cliente);
        }
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