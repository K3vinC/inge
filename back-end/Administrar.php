<?php
require "Conexion.php";

class Administrar{
public $ced="";
public $us="";
public $correo="";
public $tipo="";
public $id_juego="";
public $id_grupo="";
public $cont="";

public function Agregar_Usuario($ced,$us,$correo,$tipo,$id_juego,$id_grupo,$cont){
    // Creando la conexion
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL AñadirUsuario('".$ced."','".$us."','".$correo."','".$tipo."','".$id_juego."','".$id_grupo."','".$cont."')";
    return mysqli_query($conn->Conectar(),$query);
}

public function Eliminar_Usuario($ced){
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL EliminarUsuario('".$ced."')";
    return mysqli_query($conn->Conectar(),$query);
}

}