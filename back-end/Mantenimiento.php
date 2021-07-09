<?php
require "Conexion.php";

class Mantenimiento{
public $cod="";
public $level="";
public $question="";
public $answer="";

public function Editar_perfil($cod,$question,$answer){
    // Creando la conexion
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL ActualizarPreguntas('".$cod."','".$question."','".$answer."')";
    return mysqli_query($conn->Conectar(),$query);
}

public function Eliminar_perfil($cod){
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }

    $query = "CALL EliminarPreguntas('".$cod."')";
    return mysqli_query($conn->Conectar(),$query);
}

public function Agregar_Pregunta($cod,$level,$question,$answer){
    // Creando la conexion
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL AgregarPreguntas('".$cod."','".$level."','".$question."','".$answer."')";
    return mysqli_query($conn->Conectar(),$query);}

}