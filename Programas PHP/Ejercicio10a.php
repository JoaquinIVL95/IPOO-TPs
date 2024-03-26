<?php 
// Ingreso de numoros para calcular / declaracion  de variables para almacenar los valores

echo "Ingrese numero 1: \n";
$numero1 = trim(fgets(STDIN)); 

echo "Operacion? (+, -, * ,/): \n";
$operador=trim(fgets(STDIN));

echo "Ingrese numero 2: \n";
$numero2 = trim(fgets(STDIN)); 



//clase Calculadora

class CalculadoraB{
    //atributo privado

    private $num1;
    private $num2;
    private $operacion;

    //constructor

    public function  __construct($n1, $op , $n2){
        $this->num1=$n1;
        $this->operacion= $op;
        $this->num2=$n2;
    }

    public function getResultado(){

        $resultado = 0 ;
        if( $this->operacion == '+') {
            $resultado = $this->num1  + $this->num2;
            
        }else if ($this->operacion == '-'){
            $resultado = $this->num1 - $this->num2;
            
        } else if ($this->operacion =='*'){
            $resultado = $this->num1 * $this->num2;   
              
        } else if ( $this->operacion== '/'){
            if($this->num2 !=0) {
                $resultado = $this->num1 / $this->num2;
                
             } else {
                $resultado = -1;
                 
             }              
        }
        return $resultado;

    }

    public function __toString(){
        return  "La operación es: " . $this->getResultado() . "\n";
    }

    public function __destruct()
    {
        echo    "Se destruye el objeto" . "\n";
    }
}

// asignar nueva clase y pasar valores por parametro

$calculadora = new CalculadoraB($numero1, $operador, $numero2);


// Get resultado 

echo  $calculadora ;



