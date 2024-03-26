<?php 


Class cuentaBancaria{

    private $cuentaNum;
    private $clienteDNI;
    private $cuentaSaldo;
    private $cuentaInteresAnual;


    public function __construct($ctaNum, $dni, $saldo, $interesAnual) {
        $this->cuentaNum = $ctaNum;
        $this->clienteDNI = $dni;
        $this->cuentaSaldo = $saldo;
        $this->cuentaInteresAnual = $interesAnual;
        
    }


    public function getCuentaNum (){
        return $this->cuentaNum;
    }

    public function getClienteDni(){
        return $this->clienteDNI;
    }

    public function getCuentaSaldo(){
        return $this->cuentaSaldo;
    }
    
    public function getInteresAnual(){
        return $this->cuentaInteresAnual;
    }

    public function setCuentaNum (){
        return $this->cuentaNum;
    }

    public function setClienteDni(){
        return $this->clienteDNI;
    }

    public function setCuentaSaldo(){
        return $this->cuentaSaldo;
    }
    
    public function setInteresAnual(){
        return $this->cuentaInteresAnual;
    }

    


}