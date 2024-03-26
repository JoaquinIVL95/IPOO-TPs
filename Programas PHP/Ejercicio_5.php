<?php 
    class Persona{
        private $fechaNAc ;
        private $edad;
        private $nacionalidad;
        private $altura;
        
        public function __construct($nac, $edadActual, $pais , $cuantoMide){
            $this->fechaNAc = $nac;
            $this->edad =  $edadActual;
            $this->nacionalidad= $pais;
            $this->altura=$cuantoMide;
        }

        public function setNuevaFechaNac ($nuevoAnioNac){
            $this->fechaNAc = $nuevoAnioNac;
        }

        // public function getNuevaFechaNac(){
        //     return $this->fechaNac;
        // }

        public function getFechaNac (){
            return  $this->fechaNAc;
        }

        public function getEdad (){
            return  $this->edad;
        }

        public function getNacionalidad (){
            return  $this->nacionalidad;
        }

        public function getAltura (){
            return  $this->altura;
        }
    }


    
    
    for($i = 0 ; $i < 2 ; $i++){
        if($i == 0){
            $p = new Persona (1995,28,"Arg",1.85);
            echo  "La fecha de nacimiento es: ". $p ->getFechaNac(). "\n";
            echo   "La edad actual es: ". $p ->getEdad() ."\n";
            echo  "Es originario del pais: ". $p ->getNacionalidad() . "\n";
            echo   "Mide: ". $p ->getAltura() ." metros \n\n";
            

        }else if($i == 1){
            $p = new Persona (1996,25,"Arg",1.75);
            echo  "La fecha de nacimiento es: ". $p ->getFechaNac(). "\n";
            echo   "La edad actual es: ". $p ->getEdad() ."\n";
            echo  "Es originario del pais: ". $p ->getNacionalidad() . "\n";
            echo   "Mide: ". $p ->getAltura() ." metros \n\n";
        }

        
    }
    $p->setNuevaFechaNac(1983);
        echo  "La fecha de nacimiento es: ". $p ->getFechaNac(). "\n";
        echo   "La edad actual es: ". $p ->getEdad() ."\n";
        echo  "Es originario del pais: ". $p ->getNacionalidad() . "\n";
        echo   "Mide: ". $p ->getAltura() ." metros \n\n";


    
?>

