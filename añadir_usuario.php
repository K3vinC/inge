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
    <link rel="stylesheet" href="front-end/añadir_usuario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Añadir Usuario</title>
</head>
<body>



<!-- En esta parte se muestra los input donde ingresarán los datos para hacer los cambios en la BD.
En los datos a cambiar tenemos la cédula, el nombre de usuario, correo, contraseña y confirmar contraseña. 
TODAVÍA NO HE PUESTO A FUNCIONAR LA VALIDACIÓN si la de confirmar contraseña es igual a nueva contraseña.
-->

<form name="form1" method='POST'>
    <div class="contenedor">
    <h3>Agregar Usuario</h3>
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
            <p>Selecciona el tipo</p>
                <div class="select">
                    <select name = "tip" >
                    <option value="estudiante">Estudiante</option>
                    <option value="profesor">Profesor</option>
                    <option value="administrador">Administrador</option>
                    </select>
                </div> 
        </div>

        
        <div class="contenedor2">

                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="ID Juego" name="id_juego" require>
                    <i class="fas fa-gamepad"></i>
                </div>
                <br>
                <div class="inputWithIcon">
                    <input Type="Text" class="barras" placeholder="Id Grupo" name="id_grupo" require>
                    <i class="fas fa-users"></i>
                </div>
                <br>
                <div class="inputWithIcon">
                    <input Type="password" class="barras" placeholder="Contraseña" name="cont" require>
                    <i class="fas fa-key"></i>
                </div>
                <br>
                <div class="inputWithIcon">
                    <input Type="password" class="barras" placeholder="Confirmar Contraseña" name="NuevaCont" require>
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tipo = $_POST['tip'];
        $id_juego = $_POST['id_juego'];
        $id_grupo = $_POST['id_grupo'];
        $cont = $_POST['cont'];

        $proceso = new Administrar();
        ?>

        <script>
            var frm=document.form1;
            frm.style.display="none"    
            </script>
           
        <?php 
        $wasSaved = $proceso->Agregar_Usuario($ced,$name,$email,$tipo,$id_juego,$id_grupo,$cont);
        if($wasSaved){
            ?>
            <h2>El Usuario se agrego Correctamente</h2>

            <?php    

        }else{
            ?>
            <h2>El Usuario no se pudo agregar</h2>

            <?php
        }

        ?>
        
        <div class="contenedor4">
        <button class="boton4" onclick="location.href='vista.php'" type="button">Salir</button>
        </div>
        <?php

    }
?>

    
</body>
</html>