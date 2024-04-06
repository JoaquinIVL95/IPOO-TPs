<?php 

// Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el
// saldo actual y el interés anual que se aplica a la cuenta. Define en la clase los siguientes métodos:

// 14.a. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
// atributos de la clase.

// 14.b. Los método de acceso de cada uno de los atributos de la clase.

// 14.c. actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual
// dividido entre 365 aplicado al saldo actual).

// 14.d. depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.

// 14.e. retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).

// 14.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.

// 14.g. Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada

// uno de los métodos implementados.


Class cuentaBancaria{

    private $cuentaNum;
    private $clienteDNI;
    private $cuentaSaldo;
    private $intAnual;


    public function __construct($ctaNum, $dni, $saldo, $interesAnual) {
        $this->cuentaNum = $ctaNum;
        $this->clienteDNI = $dni;
        $this->cuentaSaldo = $saldo;
        $this->intAnual = $interesAnual;
        
    }


    public function getCuentaNum (){
        return $this->cuentaNum;
    }
    public function setCuentaNum ($ctaNum){
        $this->cuentaNum = $ctaNum;
    }

    public function getClienteDni(){
        return $this->clienteDNI;
    }
    public function setClienteDni($dni){
        $this->clienteDNI = $dni;
    }

    public function getCuentaSaldo(){
        return $this->cuentaSaldo;
    }
    public function setCuentaSaldo($saldo){
        $this->cuentaSaldo = $saldo;
    }
    
    public function getIntAnual(){
        return $this->intAnual;
    }
    public function setIntAnual($intAnual){
        $this->intAnual = $intAnual;
    }

    public function actualizarSaldo(){
        $interes = $this->getIntAnual();
        $saldoActual = $this->getCuentaSaldo();
        $nuevoSaldo = ($saldoActual * ($interes / 365) ) + $saldoActual ;
        
        $this->setCuentaSaldo($nuevoSaldo);
        return ;
    }

    public function depositar($cant){
        $cuentaSaldo =$this->getCuentaSaldo();
        $nuevoSaldo = $cuentaSaldo+$cant;

        $this->setCuentaSaldo($nuevoSaldo);
        return;
    }

    public function retirar($cant){
        $cuentaSaldo = $this->getCuentaSaldo();
        $ok = false;
        $retiro = 0;
        if($cant <=  $cuentaSaldo && $cant > 0){
            $ok = true;
        }

        if ($ok == true){
            $retiro = $cuentaSaldo - $cant;
            $this->setCuentaSaldo($retiro);
        }
        
        return $ok;
    }


    public function __toString()
    {
        
        return "Cuenta Nro: " . $this->getCuentaNum() . "\n" . "D.N.I Nro: " . $this->getClienteDni() . "\n" 
                . "Saldo Actual: " . $this->getCuentaSaldo() . "\n" . "Interes Anual: " . $this->getIntAnual() . "\n" ; 
    }


}