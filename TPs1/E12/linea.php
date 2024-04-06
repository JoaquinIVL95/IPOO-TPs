<?php

Class Linea{

private $pA;
private $pB;
private $pC;
private $pD;

public function __construct($puntoA,$puntoB,$puntoC,$puntoD)
{
    $this->pA = $puntoA;
    $this->pB = $puntoB;
    $this->pC = $puntoC;
    $this->pD = $puntoD; 
}

public function getA(){
    return $this->pA;
}
public function setA($puntoA){
    $this->pA = $puntoA;
}

public function getB(){
    return $this->pB;
}
public function setB($puntoB){
    $this->pB = $puntoB;
}

public function getC(){
    return $this->pC;
}
public function setC($puntoC){
    $this->pC = $puntoC;
}

public function getD(){
    return $this->pD;
}
public function setD($puntoD){
    $this->pD = $puntoD;
}






public function __toString()
{
    $cadena = " ";
    return $cadena;
}
}