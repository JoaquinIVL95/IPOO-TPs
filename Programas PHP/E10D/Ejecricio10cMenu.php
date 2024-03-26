<?php
include ('Ejercicio10cClase.php');
// Programa que permite logear y guardar contraseña, que permita cambiar la contraseña y que las almacene, necesita frase para cambiar contraseña


// Clase DB

// $db = new DBUsers($user, $pass,$frase);


// menu para seleccionar opciones : Login in / crear usuario / Cambiar contraseña / recordar contraseña 
do{
    echo "1. Log In \n";
    echo "2. Crear Usuario \n";
    echo "3. Modificar Contraseña \n";
    echo "4. Recordar Contraseña \n";
    echo "5. Salir del programa \n\n";
    echo "Seleccione una opcion con numero: \n";

    $opcion =trim(fgets(STDIN)); 
    $terminado = false;



    switch($opcion){
        case 1:
                // Login
                echo "Ingrese su nombre de usuario: \n";
                $login = trim(fgets(STDIN));
                echo "Ingrese la contraseña: \n";
                $passW = trim(fgets(STDIN));
    
                // Programar validacion
                $login = new Login($login, $passW);
                echo $login->verificarUsuario($login, $passW);
                
                break;
        case 2:
                // Crear Usuario
                echo "Ingrse  el nombre del nuevo usuario: \n";
                $usuarioNuevo= trim(fgets(STDIN));
                
                // Validar que no exista en BD
    
                echo "Ingrese nueva  contraseña: \n";
                $password1 = trim(fgets(STDIN));
    
                echo "Ingrese frase de recuperacion: \n";
                $frase = trim(fgets(STDIN));
    
                $newUser = new NewUser($usuarioNuevo, $password1, $frase);
    
                // echo "Usuario creado exitosamente!!";
    
                break;
        case 3:
                // Cambiar Contraseña 
    
                echo "Desea cambiar la contraseña? S/N \n";
                $respSN = trim(fgets(STDIN));
    
                if($respSN == "S" || $respSN == "s"){
                    //Ejecutar funcion para cambio de contraseña
                }else if($respSN == "N" ||  $respSN == "n"){
                    // vuelve al menu principal
                }
        case 4:
                // Recordar contraseña
    
                echo "Ingrese un usuario Existente: ";
                $userExiste = trim(fgets(STDIN));
    
                // Verificar si existe
    
                if($userExiste == true){
                    echo "Ingrese la frase para recordar la contraseña: ";
                    $recordarFrase = trim(fgets(STDIN));
                }else{
                    echo "No se encuentra un usuario registrado con ese nombre, ingrese un nombre valido \n";
                }
        case 5:
                $terminado = true ;
                echo "Adios!";
                break;
        default:
                echo "Opcion invalida, seleccione una respuesta correcta \n";
                break;
    }
}while(!$terminado);