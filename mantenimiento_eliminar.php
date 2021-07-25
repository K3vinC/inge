<?php
    
    include('back-end/Mantenimiento.php');
    session_start();

    if ($_SESSION["usuario"]==""){
        header('Location: login.php');
    }

    $id = $_GET['cod'];

?>  

<!-- la variable cod es el código de la pregunta que vamos a eliminar -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/mantenimiento_actualizar.css">
    <title>Document</title>
</head>
<body>

<!-- Se hace el proceso de eliminar la pregunta y se valida si se hace o no este proceso -->   

<?php

$proceso = new Mantenimiento();

$datos = $proceso->Eliminar_perfil($id);
if($datos){
    ?>
    <h2>Se Ha eliminado Correctamente</h2>

<?php    

}else{
    ?>

<h2>No se pudo Eliminar</h2>

<?php
}


?>

    <div class="contenedor3">
        <button class="boton2" onclick="location.href='mantenimiento.php'" type="button">Salir</button>
        </div>


</body>
</html>