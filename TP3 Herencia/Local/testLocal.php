<?php

include 'Local.php';
include 'Rubro.php';
include 'Producto.php';
include 'ProductoRegional.php';
include 'ProductoImportado.php';


$objRubroLimpieza = new Rubro("Limpieza" , "Productos para uso cotidiano" , 30);
$objProducto1 = new Producto(1, "articulo para desinfectar", 100, 21, 300 , $objRubroLimpieza);
$objProducto2 = new ProductoRegional(1, "articulo para desinfectar", 10, 21, 300 , $objRubroLimpieza, 10);
$objProducto3 = new ProductoImportado(2, "articulo para desinfectar", 10, 21, 300 , $objRubroLimpieza, 50, 10);
$objLocal = new Local([]);

// echo $objProducto1;

echo "\n----------\n";

echo $objLocal->incorporarProductoLocal($objProducto1);
echo $objLocal->incorporarProductoLocal($objProducto2);

echo "\n----------\n";

echo $objLocal->retornarImporteProducto($objProducto1);

echo "\n----------\n";

echo $objLocal->retornarCostoProductoLocal();

echo "\n----------\n";

echo $objProducto1->darPrecioVenta();
echo "\n----------\n";
echo $objProducto2->darPrecioVenta();
echo "\n----------\n";
echo $objProducto3->darPrecioVenta();