<?php

Class Reloj{

    private $seg;
    private $min;
    private $hr;
    
    public function __construct($segundos,$minutos,$horas){
        $this->seg  = $segundos; 
        $this->min = $minutos;
        $this->hr = $horas;
    }

    public function getSeg(){
        return $this->seg;
    }
    public function setSeg($segundos){
        $this->seg = $segundos;
    }

    public function getMin(){
        return  $this->min;
    }
    public function setMin($minutos){
        $this->min = $minutos;
    }

    public function getHr(){
        return $this->hr;
    }
    public function setHr($horas){
        $this->hr = $horas;
    }


    public function __toString()
    {
        return "Hora: " . $this->getHr() . ":" . $this->getMin() . ":" . $this->getSeg();
    }

    public function puesta_a_cero(){
        $this->setHr(0);
        $this->setMin(0);
        $this->setSeg(0);
    }

    public function incrementar(){
        $vHora = $this->getHr();
        $vMinutos = $this->getMin();
        $vSegundos = $this->getSeg();

        $vSegundos++;
        if ($vSegundos <=59){
            $this->setSeg($vSegundos);
        }else{ // si es mayor a 59 lo vuelve a cero
            $this->setSeg(0);
            $vMinutos ++;
            if( $vMinutos<=59){
                $this->setMin( $vMinutos );
            }else{
                $this->setMin (0) ;
                $vHora ++;
                if($vHora<=23){
                    $this->setHr($vHora);
                }else{
                    $this->setHr(0);
                }
            }
        }
    }



}