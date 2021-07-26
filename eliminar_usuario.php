<?php
    
    include('back-end/Administrar.php');
    session_start();

    if ($_SESSION["usuario"]==""){
        header('Location: login.php');
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/eliminar_usuario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Eliminar Usuario</title>
</head>
<body>
 

<!-- En esta parte se muestra los input donde ingresarán los datos para hacer los cambios en la BD.
En los datos a cambiar tenemos la cédula, el nombre de usuario, correo, contraseña y confirmar contraseña. 
TODAVÍA NO HE PUESTO A FUNCIONAR LA VALIDACIÓN si la de confirmar contraseña es igual a nueva contraseña.
-->

<form name="form1" method='POST'>
    <div class="contenedor">
       <!-- <div class="contenedor2">
            
            
        </div>  -->
        <h3>Eliminar Usuario</h3>
        <div class="inputWithIcon">
        <input Type="Text" placeholder="Cédula" name="ced" require>
        <i class="far fa-address-card"></i>
        </div>

        <div class="contenedor2">
        <input type="submit" value = "Eliminar" name="eliminar" class="boton">
        <button class="boton2" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>


    </div>

</form>

<!-- en esta parte se Guarda los nuevos datos a la BD, Además se valida si se pudo modificar o no se pudo modificar.-->

<?php
    if(isset($_POST['eliminar'])){
        $ced = $_POST['ced'];
        $proceso = new Administrar();
        ?>

        <script>
            var frm=document.form1;
            frm.style.display="none"    
            </script>
           
        <?php 
        $wasSaved = $proceso->Eliminar_Usuario($ced);
        if($wasSaved){
            ?>
            <h2>El Usuario se ha eliminado Correctamente</h2>

            <?php    

        }else{
            ?>
            <h2>El Usuario no se pudo Eliminar</h2>

            <?php
        }

        ?>
        
        <div class="contenedor3">
        <button class="boton3" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>
        <?php

    }
?>

</body>
</html>