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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Mantenimiento de preguntas</title>

    <script type="text/javascript">
    function Nivel1() {
        element = document.getElementById("content");
        check = document.getElementById("Nivel1");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }

    function Nivel2() {
        element = document.getElementById("content2");
        check = document.getElementById("Nivel2");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }

    function Nivel3() {
        element = document.getElementById("content3");
        check = document.getElementById("Nivel3");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }


</script>

</head>
<body>
    
    <!-- Se muestra el listado de preguntas con su código de pregunta, la pregunta y su respuesta
    Además se muestran los botones actualizar y eliminar de cada pregunta -->
    <div class="titulo">
        <h1>Mantenimiento de Preguntas</h1>
    </div>
    
    <div class="check">
    <p>Seleccionar nivel:</p>
               <input type="checkbox" name="nivel[]" value="1" id="Nivel1" onchange="javascript:Nivel1()"><label for="Nivel1">Nivel 1</label>
               <input type="checkbox" name="nivel[]" value="2" id="Nivel2" onchange="javascript:Nivel2()"><label for="Nivel2">Nivel 2</label>
               <input type="checkbox" name="nivel[]" value="3" id="Nivel3" onchange="javascript:Nivel3()"><label for="Nivel3">Nivel 3</label>
    </div>

    <div id="content" style="display: none;">

              <?php
                $conn = new Conexion();
                $con = $conn->Conectar();
                $query = "SELECT * from dysy_preguntas_respuesta where nivel='1'";
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
    </div>

    <div id="content2" style="display: none;">
                    
              <?php
                $conn = new Conexion();
                $con = $conn->Conectar();
                $query = "SELECT * from dysy_preguntas_respuesta where nivel='2'";
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
    </div>

    <div id="content3" style="display: none;">

    <?php
                $conn = new Conexion();
                $con = $conn->Conectar();
                $query = "SELECT * from dysy_preguntas_respuesta where nivel='3'";
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

    </div>


    <div class="contenedor3">
        <button class="boton" onclick="location.href='agregar_pregunta.php'" type="button">Agregar Pregunta</button>
        <button class="boton2" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>


  

</body>
</html>