<?php
require "Conexion.php";

class Administrar{

public $ced="";
public $id_juego="";
public $id_grupo="";
public $name="";
public $cont="";

public function Agregar_Usuario($ced,$id_juego,$id_grupo,$name,$cont){
    // Creando la conexion
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL AñadirUsuario('".$ced."','".$id_juego."','".$id_grupo."','".$name."','".$cont."')";
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