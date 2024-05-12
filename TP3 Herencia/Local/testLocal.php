<?php


include 'Rubro.php';
include 'Producto.php';


$objRubroLimpieza = new Rubro("Limpieza" , "Productos para uso cotidiano" , 30);
$objProducto1 = new Producto(1, "articulo para desinfectar", 10, 21, 300 , $objRubroLimpieza);


echo $objProducto1;