<?php
require "Conexion.php";

class Modificar{
    public $ced="";
    public $name="";
    public $email="";
    public $pass="";
    public $puntaje="";

    function __construct($id,$user,$emai,$pwd,$punt){
        $this->ced = $id;
        $this->name = $user;
        $this->email = $emai;
        $this->pass = $pwd;
        $this->puntaje = $punt;
    }

    public function Modificar_perfil(){
        // Creando la conexion
        $conn = new Conexion();
        $con = $conn->Conectar();
        // Verificando la conexion
        if ($con->connect_error) {
            die("Conexión Fallida: " . $con->connect_error);
        }
        $query = "CALL Modificar('".$_SESSION["ced"]."','".$this->ced."','".$this->name."','".$this->email."','".$this->pass."','".$this->puntaje."')";
        return mysqli_query($conn->Conectar(),$query);
    
    
    }

}