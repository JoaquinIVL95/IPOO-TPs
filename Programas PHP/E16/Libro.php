<?php

Class Libro {

    private $isbn;
    private $titulo;
    private $anioEdic;
    private $editorial;
    private $nombA;
    private $apeA;
    // private $colect;

    public function __construct($isbn, $titulo, $edicionAnio, $editorial, $nombreAutor, $apellidoAutor)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anioEdic = $edicionAnio;
        $this->editorial = $editorial;
        $this->nombA = $nombreAutor;
        $this->apeA = $apellidoAutor;
        // $this->colect = $coleccion;
    }


    public function getIsbn(){
        return $this->isbn;
    }
    public function setIsbn($isbn){
        $this->isbn=$isbn;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function getAnioEdic(){
        return $this->anioEdic;
    }
    public function setAnioEdic($edicionAnio){
        $this->anioEdic = $edicionAnio;
    }
    
    public function getEditorial(){
        return $this->editorial;
    }
    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }
    
    public function getNombA(){
        return $this->nombA;
    }
    public function setNombA($nombre){
        $this->nombA = $nombre;
    }
    
    public function getApeA(){
        return $this->apeA;
    }
    public function setApeA($apellido){
        $this->apeA = $apellido;
    }

    // public function getColect(){
    //     return $this->colect;
    // }
    // public function setColect($coleccion){
    //     $this->colect = $coleccion;
    // }

    //funcion para verificar si la editorial de un libro es la misma que ingresa por parametro

    public function perteneceEditorial($peditorial){
        $editorialLibro = $this->getEditorial();
        $mismaEdi = false;
        if($peditorial == $editorialLibro){
            $mismaEdi = true;
        }
        return $mismaEdi;
    }


    //funcion calcula cuantos años pasaron desde la salida del libro hasta la actualidad 
    //para eso calcula la resta entre el año acutual 2024 - el año de edicion 
    public function anioDesdeEdicion(){
        $fechaActual = 2024;
        $anioEdicion = $this->getAnioEdic();

        $aniosPasados = $fechaActual - $anioEdicion;
        return $aniosPasados;
    }

    //funcion que compara el libro ingresado por parametro con los que estan en la coleccion y devuelve un true o false 
    public function iguales($libro,$coleccion){
        $esParte= false;
        if(in_array($libro, $coleccion)){
            $esParte =true;
        }
        return $esParte;


    }

    // funcion que devuelve arreglo asociativo solo con los libros publicados por la editorial dada por parametro
    public function libroEditoriales($arregloLibros, $editorial){
        $librosEditoral = array();

        foreach ($arregloLibros as $libro){
            if($libro['editorial'] == $editorial){
                $librosEditoral[] = $libro;
            }
        }

        $cadena = $this->devolverArreglos($librosEditoral);

        return $cadena;
    }

        private function devolverArreglos($arreglo){
            foreach ($arreglo as $libro) {
                echo "Título: " . $libro['titulo'] . ", Editorial: " . $libro['editorial'] . "\n";
            }
    }



    public function __toString()
    {
        $libro = $this->getTitulo();
        $edicionAnio = $this->getAnioEdic();
        $editorial = $this->getEditorial();
        $nombreAutor =  $this->getNombA();
        $apellidoAutor = $this->getApeA();

        return "Libro: ". $libro .
          ", Año de Edición: ". $edicionAnio . 
          ", Editorial: " . $editorial . 
          ", Nombre y apellido del auto: " . $apellidoAutor . ", " . $nombreAutor . "\n";  
    }
}