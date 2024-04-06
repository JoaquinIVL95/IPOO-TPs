<?php

include 'Login.php';


$usuarios = ['pepe', 'juan'];
$claveActual = ['851995', "893"];
$clavesAnteriores = [['1234', '231' , '12312'], ['999']];
$frases = ['tu fecha de nacimiento' , 'los ultimos tres numeros del DNI'];


$unUsuario = "pepe";
$contraseñaActual=  "2";
$nuevaContraseña= "123421312";
$objLogin= new Login($usuarios, $claveActual, $clavesAnteriores, $frases);






if($objLogin->verificarUsuario($unUsuario) == true && $objLogin->verificarCont($unUsuario) == $contraseñaActual ){
    echo "Bienvenido\n";
    
}else{
    if(!in_array($unUsuario,$usuarios)){
        echo "El usuario no existe.\n";
    }else{

        echo "Contraseña Incorrecta\n" ;
        echo "La frase de recuperacion es : ". $objLogin->fraseRecuperacion($unUsuario) . "\n";
    }
}

$nuevaC = $objLogin->cambiarContraseña($unUsuario, $contraseñaActual, $nuevaContraseña);

if ($nuevaC == true){

    echo "Contraseña modificada exitosamente: " .  $objLogin . " <--- \n";
}else{
    echo  "Error al cambiar la contraseña \n";
}
