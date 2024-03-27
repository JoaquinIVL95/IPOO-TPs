<?php

Class Cuadrado{

    // private $vertices = [];

    // public function __construct($v1, $v2, $v3, $v4) {
    //     $this->vertices['v1'] = $v1;
    //     $this->vertices['v2'] = $v2;
    //     $this->vertices['v3'] = $v3;
    //     $this->vertices['v4'] = $v4;
    // }

    // public function getVertices() {
    //     return $this->vertices;
    // }

    // public function setVertices($v1, $v2, $v3, $v4) {
    //     $this->vertices['v1'] = $v1;
    //     $this->vertices['v2'] = $v2;
    //     $this->vertices['v3'] = $v3;
    //     $this->vertices['v4'] = $v4;
    // }

    private $v1 = [];
    private $v2 = [];
    private $v3 = [];
    private $v4 = [];

    public function __construct($vertice1,$vertice2,$vertice3,$vertice4)
    {
        $this->v1 = $vertice1;
        $this->v2 = $vertice2;
        $this->v3 = $vertice3;
        $this->v4 = $vertice4; 
    }

    public function getV1(){
        return $this->v1;
    }
    public function setV1($vertice1){

        $this->v1 = $vertice1;
    }

    public function getV2(){
        return $this->v2;
    }
    public function setV2($vertice2){
        $this->v2 = $vertice2;
    }

    public function getV3(){
        return $this->v3;
    }
    public function setV3($vertice3){
        $this->v3 = $vertice3;
    }

    public function getV4(){
        return $this->v4;
    }
    public function setV4($vertice4){
        $this->v4 = $vertice4;
    }


    public function calcularDistancia($punto1 , $punto2){ //[x1,y1] , [x2, y2]
        $x1 = $punto1[0];
        $y1 = $punto1[1];
        $x2 = $punto2[0];
        $y2 = $punto2[1];

        $distancia = sqrt(pow(($x2 - $x1),2) + pow(($y2 - $y1),2));

        return $distancia;
    }

    public function area(){
        $a =$this->getV1();
        $b = $this->getV2();
        $lado = $this->calcularDistancia($a , $b);
        $area = $lado * $lado;

        return $area;
    }

    public function desplazar($d, $puntoOriginal){
        $punto1a = $puntoOriginal[0];
        $punto1b = $puntoOriginal[1];
        $nuevoPunto = [];
        for($i = 1 ; $i <= $d ; $i++){
            $punto1a ++;
            $punto1b ++;
        }
        
        $nuevoPunto = array($punto1a,$punto1b);
        
        return $nuevoPunto;
    }

    public function expandirVertices($d) {
        // Calcular el centro del cuadrado
        $centroX = ($this->v1[0] + $this->v2[0] + $this->v3[0] + $this->v4[0]) / 4;
        $centroY = ($this->v1[1] + $this->v2[1] + $this->v3[1] + $this->v4[1]) / 4;
    
        // Calcular la diferencia entre cada vértice y el centro
        $diferenciaV1X = $this->v1[0] - $centroX;
        $diferenciaV1Y = $this->v1[1] - $centroY;
        $diferenciaV2X = $this->v2[0] - $centroX;
        $diferenciaV2Y = $this->v2[1] - $centroY;
        $diferenciaV3X = $this->v3[0] - $centroX;
        $diferenciaV3Y = $this->v3[1] - $centroY;
        $diferenciaV4X = $this->v4[0] - $centroX;
        $diferenciaV4Y = $this->v4[1] - $centroY;
    
        // Ajustar cada vértice
        $nuevoV1 = [$this->v1[0] + $diferenciaV1X * $d, $this->v1[1] + $diferenciaV1Y * $d];
        $nuevoV2 = [$this->v2[0] + $diferenciaV2X * $d, $this->v2[1] + $diferenciaV2Y * $d];
        $nuevoV3 = [$this->v3[0] + $diferenciaV3X * $d, $this->v3[1] + $diferenciaV3Y * $d];
        $nuevoV4 = [$this->v4[0] + $diferenciaV4X * $d, $this->v4[1] + $diferenciaV4Y * $d];
    
        // Aplicar los cambios
        $this->setV1($nuevoV1);
        $this->setV2($nuevoV2);
        $this->setV3($nuevoV3);
        $this->setV4($nuevoV4);
    }


    public function ejecutarDesplazamiento($d){
        $nuevoV1= $this->desplazar($d, $this->getv1());
        $nuevoV2= $this->desplazar($d, $this->getv2());
        $nuevoV3= $this->desplazar($d, $this->getV3());
        $nuevoV4= $this->desplazar($d, $this->getV4());

        $this->setV1($nuevoV1);
        $this->setV2($nuevoV2);
        $this->setV3($nuevoV3);
        $this->setV4($nuevoV4);

        return;
    }

  
    public function agrandar($d) {
        // Desplazar cada vértice del cuadrado
        $this->ejecutarDesplazamiento($d);

        // Recalcular el área después del agrandamiento
        $nuevaArea = $this->area();

        return $nuevaArea;
    }



    private function devolverArreglos($arreglo){
        $cadena = "";
        foreach($arreglo as $elemento){
            $cadena = $cadena . "|". $elemento;
            
        }
        return $cadena;
    }


    public function __toString()
    {
        $v1 = $this->devolverArreglos($this->getV1());
        $v2 = $this->devolverArreglos($this->getV2());
        $v3 = $this->devolverArreglos($this->getV3());
        $v4 = $this->devolverArreglos($this->getV4());
        return $v1 . " / ". $v2 . " / " . $v3 . " / " . $v4;
    }
}

