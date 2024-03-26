<?php
class Tiempo {
    private $segundos;

    public function __construct($segundos) {
        $this->segundos = $segundos;
    }


    public function getSegundos(){
        return $this->segundos;
    }
    public function setSegundos($segundos){
         $this->segundos = $segundos;
    }

    public function convertirASegundos() {
        $horas = floor($this->getSegundos() / 3600);
        $minutos = floor(($this->getSegundos() % 3600) / 60);
        $segundos = $this->getsegundos() % 60;

        return sprintf('%02d:%02d:%02d', $horas, $minutos, $segundos);
    }

    public function getIterar() {
        while ($this->getSegundos() <= 86400) { // Iterar hasta 23:59:59 (86400 segundos)
            echo $this->convertirASegundos() . "\n";
            sleep(0.5);
            $iterarSegundos = $this->setSegundos();
            $iterarSegundos = $iterarSegundos++;
        }
        $this->setSegundos() == 0; // Reiniciar a 00:00:00
    }

    public function __toString() {
        return $this->convertirASegundos();
    }
}

// Crear una instancia de la clase Tiempo con 0 segundos
$tiempo = new Tiempo(0);
$tiempo->getIterar();
?>
