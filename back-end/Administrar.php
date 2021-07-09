<?php
require "Conexion.php";

class Administrar{
public $cod="";
public $question="";
public $answer="";

function __construct($id,$pre,$res){
    $this->cod = $id;
    $this->question = $pre;
    $this->answer = $res;
}

public function Editar_perfil(){
    // Creando la conexion
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL Mantenimiento('".$this->cod."','".$this->question."','".$this->answer."')";
    return mysqli_query($conn->Conectar(),$query);
}

}