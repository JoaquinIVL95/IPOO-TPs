<?php

include_once 'Viaje.php';
include_once 'Personas.php';
include 'ResponsableV.php';




$objResponsableV = new ResponsableV ("123"  , "4412", "pedro" , "zahas", "38892491");

$objViaje = new Viaje("14","Neuquén",50, $objResponsableV);



while(true){


    echo "1. Modificar destino\n";
    echo "2. Agregar responsable del viaje\n";
    echo "3. Agregar pasajero\n";
    echo "4. Ver información del viaje\n";
    echo "5. Ver pasajeros\n";
    echo "6. Eliminar Pasajero\n";
    echo "7. Salir\n";
    echo "Seleccione una opción: ";

    $opcion = trim(fgets(STDIN));

    switch ($opcion){
        case '1':
            echo "Ingrese el nuevo destino: ";
            $destino  = trim(fgets(STDIN));
            $objViaje->setDestino($destino);
            echo "Ingrese codigo de viaje: ";
            $codViaje = trim(fgets(STDIN));
            $objViaje->setViajeCod($codViaje);
            echo "Ingrese capacidad maxima de personas: ";
            $capMaxima = trim(fgets(STDIN));
            $objViaje->setMaxCantP($capMaxima);
            break;
        
        case '2':

            echo "Ingrese Numero de empleado: ";
            $numEmp = trim(fgets(STDIN));
            echo "Numero de licencia: ";
            $licencia = trim(fgets(STDIN));
            echo "Nombre: ";
            $nomResp = trim(fgets(STDIN));
            echo "Apellido: ";
            $apeResp = trim(fgets(STDIN));
            echo "Dni: ";
            $dniRespV = trim(fgets(STDIN));
            
            $objResponsableV = new ResponsableV($numEmp , $licencia, $nomResp, $apeResp, $dniRespV);
            $respValido = $objViaje->agregarResponsable($objResponsableV);
            if($respValido == true) {
                echo "Error al agregar el responsable.\n\n";    
            } else{
                echo "El responsable fue agregado correctamente.\n\n";    
            }
            break;

        case '3':
            //Agregar persona al viaje
            echo "Ingrese nombre del Pasajero: ";
            $nombrePasajero =  trim(fgets(STDIN));
            echo "Ingrese Apellido: ";
            $apePasajero = trim(fgets(STDIN));
            echo "Ingrese Numero de DNI: ";
            $numDniP = trim(fgets(STDIN));
            echo "Ingrse Numero de Telefono: ";
            $numTelP = trim(fgets(STDIN));

            $objPersonas = new Personas($nombrePasajero,$apePasajero,$numDniP,$numTelP);

            $cargaValida = $objViaje->agregarPasajeros($objPersonas);

            if ($cargaValida == true){
                echo "Error al cargar usuario, ya se encuentra registrado. \n\n";
            }else{
                echo "Carga exitosa. \n\n";
            }


            break;

        case '4':
            echo "Los datos del viaje son: \n" . $objViaje . "\n" . 
            $objResponsableV . "\n" ;
            

            break;
        
        case '5':

            echo $objViaje->listaPasajeros() . "\n\n";

            break;

        case '6':
            
            //opcion para eliminar un pasajero con su numero de DNI
            echo "ingrese el Dni de la persona que desea eliminar de la lista de pasajeros: ";
            $dniEliminar=trim(fgets(STDIN));
            $pasajeroEliminado = $objViaje->eliminarPasajero($dniEliminar);
            
            if($pasajeroEliminado == true){
                echo "Se ha eliminado el pasajero correctamente.\n\n";

            }else{
                echo "El pasajero con el DNI ingresado no se encuentra en la lista\n\n";
            }

            break;

        case '7':
            echo "Cerrando programa";
            exit;
            
        default:
            echo "Opción no válida, intente nuevamente.\n";
    }
}




