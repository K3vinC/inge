<?php
require "Conexion.php";

class Modificar{
    public $ced="";
    public $name="";
    public $email="";
    public $pass="";

    function __construct($id,$user,$emai,$pwd){
        $this->ced = $id;
        $this->name = $user;
        $this->email = $emai;
        $this->pass = $pwd;
    }

    public function Modificar_perfil(){
        // Creando la conexion
        $conn = new Conexion();
        $con = $conn->Conectar();
        // Verificando la conexion
        if ($con->connect_error) {
            die("Conexión Fallida: " . $con->connect_error);
        }
        $query = "CALL Modificar('".$_SESSION["ced"]."','".$this->ced."','".$this->name."','".$this->email."','".$this->pass."')";
        return mysqli_query($conn->Conectar(),$query);
    
    }

}