<?php
    include('back-end/Modificar.php');
    session_start();

    if ($_SESSION["usuario"]==""){
        header('Location: login.php');
    }

?>  

<!-- ESTE PROCESO ES PARA EL ESTUDIANTE Y PARA EL PROFESOR.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/modificar_perfil.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Modificar Perfil</title>
</head>
<body>

<!-- En esta parte se muestra los input donde ingresarán los datos para hacer los cambios en la BD.
En los datos a cambiar tenemos la cédula, el nombre de usuario, correo, contraseña y confirmar contraseña. 
TODAVÍA NO HE PUESTO A FUNCIONAR LA VALIDACIÓN si la de confirmar contraseña es igual a nueva contraseña.
-->

<form name="form1" method='POST'>
    <div class="contenedor">
        <h3>QuestSys</h3>
        <h3>Editar Perfil</h3>
            <div class="contenedor2">
                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="Cédula" name="ced" require>
                    <i class="fas fa-address-card"></i>
                </div>
                <br>
                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="Nombre de usuario" name="name" require>
                    <i class="fas fa-user"></i>
                </div>
                <br>
                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="Correo" name="email" require>
                    <i class="fas fa-at"></i>
                </div> 
            </div>

        
        <div class="contenedor2">
                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="Contraseña" name="pass" require>
                    <i class="fas fa-key"></i>
                </div>
            <br>
                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="Confirmar Contraseña" name="pass2" require>
                    <i class="fas fa-key"></i>
                </div>
        </div>

        <div class="contenedor3">
            <input type="submit" value = "Enviar" name="enviar" class="boton">
            <button class="boton2" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>

    </div>


</form>

<!-- en esta parte se Guarda los nuevos datos a la BD, Además se valida si se pudo modificar o no se pudo modificar.-->

<?php
    if(isset($_POST['enviar'])){
        $ced = $_POST['ced'];
        $name= $_POST['name'];
        $email = $_POST['email'];
        $pass= $_POST['pass'];
        $puntaje= $_SESSION["puntaje"];
        $proceso = new Modificar($ced,$name,$email,$pass,$puntaje);
        ?>

        <script>
            var frm=document.form1;
            frm.style.display="none"    
            </script>
           
        <?php 
        $wasSaved = $proceso->Modificar_perfil();
        if($wasSaved){
            $_SESSION["ced"] = $ced;
            $_SESSION["usuario"] = $name;
            ?>
            <h2>Se modificó Correctamente</h2>

            <?php    

        }else{
            ?>
            <h2>No se pudo Modificar</h2>

            <?php
        }

        ?>
        
        <div class="contenedor3">
        <button class="boton2" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>
        <?php

    }
?>


            
</body>
</html>