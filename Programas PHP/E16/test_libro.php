<?php
include_once 'Libro.php';

$arregloLibros= array(
    array("titulo" => "PHP" , "editorial" => "label"),
    array("titulo" => "Java", "editorial" => "success"),
    array("titulo" => "JavaScript","editorial"=>"label"),
);

$coleccion=["PHP","Java", "C++", "JavaScript"];
$libro = "JavaScript";
$peditorial = "label";


$objLibro = new Libro(true, $libro, 1995 , "label", "pepe" , "gonzales");
$objLibro1 = new Libro(true, $libro, 2000 , "success", "pepe" , "gonzales");
$objLibro2 = new Libro(true, $libro, 2010 , "waxx", "pepe" , "gonzales");

echo $objLibro;

echo "han pasado " . $objLibro->anioDesdeEdicion() . " años \n";

$compararEditorial = "label";

if ($objLibro->perteneceEditorial($compararEditorial) == true){
    echo "El libro pertenece a la misma editorial \n ";
}else{
    echo "no es de la misma editorial \n";
}

if ($objLibro->iguales($libro,$coleccion) == true){
    echo "El libro: " . $libro . ", se encuentra en la colección \n";
} else {
    echo "No esta el libro en la colección \n";
}

$librosEditorial = $objLibro->libroEditoriales($arregloLibros,$peditorial);
echo $librosEditorial;

echo $objLibro1;

echo "han pasado " . $objLibro1->anioDesdeEdicion() . " años \n";

$compararEditorial = "label";

if ($objLibro1->perteneceEditorial($compararEditorial) == true){
    echo "El libro pertenece a la misma editorial \n ";
}else{
    echo "no es de la misma editorial \n";
}

if ($objLibro1->iguales($libro,$coleccion) == true){
    echo "El libro: " . $libro . ", se encuentra en la colección \n";
} else {
    echo "No esta el libro en la colección \n";
}

$librosEditorial = $objLibro1->libroEditoriales($arregloLibros,$peditorial);
echo $librosEditorial;



echo $objLibro2;