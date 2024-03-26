<?php

Class Calculadora {

    private $num1;
    private $op;
    private $num2;

    public function __construct($numero1, $operacion, $numero2){
        $this->num1 = $numero1;
        $this->op = $operacion;
        $this->num2 = $numero2;
    }

    public function getNum1(){
        return $this->num1;
    }
    public function setNum1(){
        return $this->num1;
    }

    public function getOp(){
        return $this->op;
    }
    public function setOp(){
        return $this->op;
    }

    public function getNum2(){
        return $this->num2;
    }
    public function setNum2(){
        return $this->num2;
    }


    public function OperacionResultado(){
        $resultado = 0;
        // $error = false;
        if($this->getOp() == "+"){
            $resultado = $this->getNum1() + $this->getNum2();
        }else if ($this->getOp() == "-"){
            $resultado = $this->getNum1() - $this->getNum2();
        }else if($this->getOp() == "*"){
            $resultado = $this->getNum1() * $this->getNum2();
        }else if ($this->getOp() == "/"){
            if($this->getNum2() == 0 ){
                $resultado = 111;
            }else if($this->getNum1() > 0){
                $resultado = $this->getNum1() / $this->getNum2();
            }
        }
        return $resultado;
    }

    public function __toString()
    {
        $resultado = $this->OperacionResultado();
        return $resultado;
    }

}   