<?php
    
    include('back-end/Mantenimiento.php');
    session_start();

    if ($_SESSION["usuario"]==""){
        header('Location: login.php');
    }

?> 

<!-- esta funcionalidad solo es para el PROFESOR-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/agregar_pregunta.css?1.0">
    <title>Agregar Pregunta</title>
</head>
<body>

<center>
    <h1>DySy Quest</h1>
    <h1>Nueva Pregunta</h1>
</center>

<form name="form1" method='POST'>
    <div class="contenedor">
        <div class="contenedor2">
        <label>Ingrese el código
        <input Type="Text" class="cod" name="cod" require></label>

            <br>
        <div class="niveles">
            <label>Selecciona el nivel
            <select name = "nivel" >
            <option value="1">fácil</option>
            <option value="2">normal</option>
            <option value="3">difícil</option>
            </select>
            </label>
            </div>  
            <textarea class="pr" placeholder="Ingrese la Pregunta" name="pregunta" require></textarea>

            <textarea class="pr" placeholder="Ingrese la Respuesta" name="respuesta" require></textarea>



        </div>
    </div>

    <div class="contenedor3">
        
            <input type="submit" value = "Enviar" name="enviar" class="boton">

        <button class="boton2" onclick="location.href='mantenimiento.php'" type="button">Salir</button>
    
    </div>

</form>

<!-- esta parte se encarga de Guardar los datos a la BD, los datos de la pregunta que el profesor lleno. 
Además valida si se agregó correctamente o no se pudo agregar-->

<?php
    if(isset($_POST['enviar'])){
        $cod = $_POST['cod'];
        $nivel = $_POST['nivel'];
        $preg = $_POST['pregunta'];
        $resp= $_POST['respuesta'];
        $proceso = new Mantenimiento();
        ?>

        <script>
            var frm=document.form1;
            frm.style.display="none"    
            </script>
           
        <?php 
        $wasSaved = $proceso->Agregar_Pregunta($cod,$nivel,$preg,$resp);
        if($wasSaved){
            ?>
            <h2>Se Agregó Correctamente</h2>

            <?php    

        }else{
            ?>
            <h2>No se pudo Agregar</h2>

            <?php
        }

        ?>
        
        <div class="contenedor3">
        <button class="boton2" onclick="location.href='mantenimiento.php'" type="button">Salir</button>
        </div>
        <?php

    }
?>  
    
</body>
</html>