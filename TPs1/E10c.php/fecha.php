<?php

Class Fecha{

    private $dia;
    private $mes;
    private $año;
    private $incFecha;

    
    

    public function  __construct($d, $m ,$a, $diasT){
        $this->dia = $d;
        $this->mes = $m;
        $this->año = $a;
        $this->incFecha = $diasT;
    }

    public function getIncFecha(){
        return $this->incFecha;
    }
    public function setIncFecha($incFecha){
        $this->incFecha =  $incFecha;
    }

    public function getDia( ){
        return $this->dia;
    }
    public function setDia($dia){
        $this->dia = $dia;
    }

    public function getMes(){
        return $this->mes;
    }
    public function setMes( $mes ) {
        $this->mes = $mes;
    }
    
    public function getAño() {
	return $this->año;
    }

    public function setAño($año) {
        $this->año = $año;  
    }

    public function esBisiesto($a){
        $bisiesto = false;
        if($a % 400 == 0){
            $bisiesto = true;
        }else if($a % 4 == 0 && $a % 100 != 0 ){
            $bisiesto = true;
        }else{
            $bisiesto = false;
        }

        return $bisiesto;
    }

    public function cantDiasMes(){
        $zAño = $this->getAño();
        $zMes = $this->getMes();
        $zMes31 = array( 1, 3 , 5, 7, 8 , 10 , 11 ,12);
        $zMes30 = array(4, 6,9 ,11 );
        $zMesF = 2;

        $cantDias = 0;

        if(in_array($zMes, $zMes31)){
            $cantDias = 31;
        }else if(in_array($zMes , $zMes30)){
            $cantDias = 30;
        }else if($zMes == $zMesF){
            if($this->esBisiesto($zAño) == true){
                $cantDias = 29;
            }else if($this->esBisiesto($zAño) == false){
                $cantDias = 28;
            }
        }

        return $cantDias;
    }

    // 1, 3, 5, 7, 8 ,10 , 12= 31
    // 2 = 28 o 29
    // 4, 6, 8, 11 = 30


    public function incrementarFecha(){
        
        // si tiene 31 dias encrementar hasta ese numero volver a 1 y despues aumentar un mes
        // Si tiene 30
        // si tiene 29 o 28 interacuta segund la cantidad
        
        // Hacer un loop para que sume hasta llegar al maximo segun la cantaidad de dias que tiene el mes 
        $incrementar = $this->getIncFecha();
        
        for($i = 0 ; $i < $incrementar ; $i++ ){
            $vDias = $this->getDia();
            $vMes = $this->getMes();
            $vAño = $this->getAño();

            if($this->cantDiasMes() == 31){
                $vDias++;
                if($vDias <=31){
                    $this->setDia($vDias);
                }else{
                    $this->setDia(1);
                    $vMes++;
                    if($vMes <= 12){
                        $this->setMes($vMes);
                    }else{
                        $this->setMes(1);
                        $vAño++;
                        $this->setAño($vAño);
                    }
                }
    
            }else if($this->cantDiasMes() == 30){
                $vDias++;
                if($vDias <=31){
                    $this->setDia($vDias);
                }else{
                    $this->setDia(1);
                    $vMes++;
                    if($vMes <= 12){
                        $this->setMes($vMes);
                    }else{
                        $this->setMes(1);
                        $vAño++;
                        $this->setAño($vAño);
                    }
                }
            }else if($this->cantDiasMes() == 29){
                $vDias++;
                if($vDias <=31){
                    $this->setDia($vDias);
                }else{
                    $this->setDia(1);
                    $vMes++;
                    if($vMes <= 12){
                        $this->setMes($vMes);
                    }else{
                        $this->setMes(1);
                        $vAño++;
                        $this->setAño($vAño);
                    }
                }
            }else if($this->cantDiasMes() == 28){
                $vDias++;
                if($vDias <=31){
                    $this->setDia($vDias);
                }else{
                    $this->setDia(1);
                    $vMes++;
                    if($vMes <= 12){
                        $this->setMes($vMes);
                    }else{
                        $this->setMes(1);
                        $vAño++;
                        $this->setAño($vAño);
                    }
                }
            }
        }

         
        return $this->getDia() . "/" . $this->getMes() . "/" . $this->getAño();
    }

    public function mesesArray(){
        $meses = array(
            1 => "Enero", 2 => "Febrero",3=>"Marzo",4=>"Abril",5=>"Mayo",6=>"Junio",7=>"Julio",8=>"Agosto",
            9=>"Septiembre",10=>"Octubre",11=>"Noviembre",12=>"Diciembre"
        );
        return $meses;
    }

    public function getMesAlargado(){
        
        return $this->mesesArray()[ $this->getMes() ];
    }


    public function __toString()
    {
        return "Fecha abreviada: (" . $this->getDia() . "/" . $this->getMes() . "/" . $this->getAño() . ") \n" 
                . "Fecha escrita: " . $this->getDia() . " de " . $this->getMesAlargado() . " de " . $this->getAño() . "\n"
                . "Nueva fecha incrementada con " . $this->getIncFecha() . " dias: " . $this->incrementarFecha();
    }

}