<?php
require "Conexion.php";

class Login{
public $usuario="";
public $contra="";

function __construct($user,$pass){
    $this->usuario = $user;
    $this->contra = $pass;
}

public function Verificar(){
    $con = new Conexion();
    $verificar=true;
    $consulta = "CALL Login('".$this->usuario."','".$this->contra."')";
    $resul = mysqli_query($con->Conectar(), $consulta);
    $existLogin = mysqli_num_rows($resul);
    if(!$existLogin > 0){
        $verificar = false;
        }
    else{
        $resul = mysqli_fetch_object($resul);
        $_SESSION["ced"] = $resul->ID_usuario;
        $_SESSION["usuario"] = $resul->username;
        $_SESSION["tipo"] = $resul->TYPE;
        $_SESSION["contra"] = $resul->psswd;
        $_SESSION["puntaje"]= $resul->score;
        }

    mysqli_close($con->Conectar());
    return $verificar;
    }


}

?>