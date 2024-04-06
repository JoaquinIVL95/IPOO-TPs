<?php




class Login {
    private $usuarios = [];
    private $claves = [];
    private $clavesAnt = [];
    private $frases = [];

    public function __construct($nombreUsuario, $contrasena, $contAnterior ,$fraseNueva) {
        $this->usuarios= $nombreUsuario;  
        $this->claves= $contrasena;
        $this->frases= $fraseNueva; 
        $this->clavesAnt = $contAnterior;
        
    }

    public function getUsers() {
        return $this->usuarios;
    }
    public function setUsers($nombreUsuario){
        $this->usuarios = $nombreUsuario;
    }

    public function getPass() {
        return $this->claves;
    }// este metodo deberia ser un metodo aparte, el metodo setX debe ser  para asignar un elemnto completo 
    public function setPass($contrasena, $indice){
        $nuevoValor = array($indice => $contrasena);
        $this->claves = array_replace($this->getPass(), $nuevoValor);
    }

    public function getClavesAnt(){
        return $this->clavesAnt;
    }
    public function setClavesAnt($contAnterior, $indice){
        
        // $this->clavesAnt =  $contAnterior;
        array_push($this->clavesAnt[$indice] , $contAnterior);
    }

    public function getFrases() {
        return $this->frases;
    }
    public function setFrases($fraseNueva){
        $this->frases = $fraseNueva;
    }



    // implementar un método que permita validar una contraseña con la almacenada

    public function verificarCont($nombreUsuario){
        $contraseña = "false";
    
        if($this->verificarUsuario($nombreUsuario)){
            $indiceCont = $this->indiceArreglos($nombreUsuario, $this->getUsers());
            if($indiceCont !== false && array_key_exists($indiceCont, $this->getPass())){
                // Obtener la contraseña usando el índice obtenido
                $contraseña = $this->getPass()[$indiceCont];
                // $contraseña = true;
            }
        }
    
        return $contraseña;
    }


    public function cambiarContraseña($nombreUsuario, $claveActual, $nCont){
        // $this->setUsers($nombreUsuario); 
        $cambioExitoso = false;
        $cActualGuardada = $this->verificarCont($nombreUsuario);

        $iContAnteriores = $this->indiceArreglos($nombreUsuario,  $this->getUsers());
     
        if($this->verificarUsuario($nombreUsuario) == true){
            if($cActualGuardada == $claveActual){
                
                if($nCont != $cActualGuardada && !in_array($nCont , $this->getClavesAnt()[$iContAnteriores] )){
                    $this->setClavesAnt($claveActual,$iContAnteriores);
                    $this->setPass($nCont, $iContAnteriores) ;
                    $cambioExitoso = true;
                    // $cambioExitoso = $this->getPass()[$iContAnteriores];
                    // print_r ($this->getClavesAnt());
                    // print_r ($this->getPass());
                }else{
                    $cambioExitoso = false;
                }
            }else{
                $cambioExitoso = false;
            }
        }else{
            $cambioExitoso = false;
        }

        return $cambioExitoso;
    }


    public function fraseRecuperacion($nombreUsuario){
        $frases= $this->getFrases();
        $indice = $this->indiceArreglos($nombreUsuario, $this->getUsers());
        return $frases[$indice];
    }

    public function verificarUsuario($nombreUsuario) {
        $rta = false;
        // Verificar si el nombre de usuario existe en el array de usuarios
        if (in_array($nombreUsuario, $this->getUsers())) {
                $rta = true;
            } 
            return $rta;
    }

    public function indiceArreglos($valor,  $arr) {
       $indice= array_search($valor,$arr);  
        return $indice;
    }



    private function devolverArreglos($arreglo){
        $cadena = "";
        foreach($arreglo as $elemento){
            $cadena = $cadena . "|". $elemento;
            
        }
        return $cadena;
    }

    public function __toString(){
        $usuarios = $this->getUsers();
        // $cadenaUsuario = $this->devolverArreglos($usuarios);
        $indice = $this->indiceArreglos('juan',$usuarios);

        $cadenaPassNueva = $this->getPass()[$indice];

        return $cadenaPassNueva;
    }
}



