<?php
require "Conexion.php";

class Jugar{
public $id="";
public $puntaje="";
public $Arraylevel2 = array('Desarrollo ágil','Estimación','Estudio de negocio','Fase de resultado','Análisis de riesgo','Bongox','More Have','Desarrollo de problema','Manipulación de datos','Concert','TimeDs','Centrarse en el análisis','No cometer errores','Realizar mejor diseño','RUD');
public $Arraylevel3 = array('Desarrollo de la aplicación','Estudio de mercado','RUD','Análisis de resultado','Aplicación','Evaluación de capacidades','Desarrollo de problema','Manipulación de datos','Recolección de requerimientos','un conjunto de buenas prácticas para trabajar colaborativamente','Centrarse en el análisis','Kanban','Preparación');

public function Agregarpuntaje($id,$puntaje){
    // Creando la conexion
    $conn = new Conexion();
    $con = $conn->Conectar();
    // Verificando la conexion
    if ($con->connect_error) {
        die("Conexión Fallida: " . $con->connect_error);
    }
    $query = "CALL InsertarPuntaje('".$id."','".$puntaje."')";
    return mysqli_query($conn->Conectar(),$query);

}

public function ValorAleatorio(){
    return $this->Arraylevel2[array_rand($this->Arraylevel2)]; 
}

public function Valor2Aleatorio(){
    return $this->Arraylevel3[array_rand($this->Arraylevel3)]; 
}

}
