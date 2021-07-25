<?php
    include('back-end/Conexion.php');
    
    session_start();

    if ($_SESSION["usuario"]==""){
        header('Location: login.php');
    }

?>  

<!-- ESTA FUNCIONALIDAD SOLO ES PARA EL PROFESOR NO LE HAGAN CAMBIOS EN LAS INTERFACES, SOLO EN EL BACKEND 
PARA QUE PUEDA FUNCIONAR CON LA BD QUE TIENEN EN SU PC -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/mantenimiento.css">
    <title>Mantenimiento de preguntas</title>
</head>
<body>
    
    <!-- Se muestra el listado de preguntas con su código de pregunta, la pregunta y su respuesta
    Además se muestran los botones actualizar y eliminar de cada pregunta -->
              <?php
                $conn = new Conexion();
                $con = $conn->Conectar();
                $query = "SELECT * from dysy_preguntas_respuesta;";
                $result_tasks = mysqli_query($conn->Conectar(), $query);
                 while($row =mysqli_fetch_assoc($result_tasks)){?>

            <div class="contenedor">

                 <div class="contenedor1">
                  <h2> <?php echo $row['cod_pregunta'];?></h2>
                  <h3> <?php echo $row['pregunta'];?> </h3>
                 </div>

                 <div class="contenedor2">
                  <h4> <?php echo $row['respuesta'];?></h4>
                  </div> 
                  
                  <a class="btnedit" href="mantenimiento_actualizar.php?cod=<?= $row['cod_pregunta'];?>">Actualizar</a>

                  <a class="btndelete" href="mantenimiento_eliminar.php?cod=<?= $row['cod_pregunta'];?>">Eliminar</a>  
                    
            </div>
            <?php }    
                                      
                    ?> 



    <div class="contenedor3">
        <button class="boton" onclick="location.href='agregar_pregunta.php'" type="button">Agregar Pregunta</button>
        <button class="boton2" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>


  

</body>
</html>