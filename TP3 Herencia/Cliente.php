<?php 
Class Cliente extends Persona{

    private $numCliente;

    public function __construct($dni, $nombre, $apellido,$numCliente)
    {
        parent::__construct($dni, $nombre , $apellido);

        $this->numCliente = $numCliente;
    }


    public function getNumCliente(){
        return $this->numCliente;
    }
    public function setNumCliente($numCliente){
        $this->numCliente = $numCliente;
    }


    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "\n Numero de cliente: " . $this->getNumCliente();
        return $cadena;
    }
}