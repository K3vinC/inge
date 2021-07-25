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
        $_SESSION["ced"] = $resul->id;
        $_SESSION["usuario"] = $resul->user;
        $_SESSION["tipo"] = $resul->type;
        $_SESSION["contra"] = $resul->pwd;
        }

    mysqli_close($con->Conectar());
    return $verificar;
    }


}

?>