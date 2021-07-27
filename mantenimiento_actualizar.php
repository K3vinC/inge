<?php
    
    include('back-end/Mantenimiento.php');
    session_start();

    if ($_SESSION["usuario"]==""){
        header('Location: login.php');
    }

    $id = $_GET['cod'];

?>  

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

<!-- esta conexión es necesaria para mostrar la pregunta y respuesta-->
<?php
                $conn = new Conexion();
                $con = $conn->Conectar();
                $query = "SELECT * from dysy_preguntas_respuesta where ID_preg='".$id."'";
                $result_tasks = mysqli_query($conn->Conectar(), $query);
                 while($row =mysqli_fetch_assoc($result_tasks)){?>

<center>
    <h1>DySy Quest</h1>
    <h1>Editar Perfil</h1>
</center>

<form name="form1" method='POST'>
    <div class="contenedor">
        <div class="contenedor2">
        <input Type="Text" class="cod" name="cod" value="<?php echo $id;?>" readonly>
            
            <br>
           <!-- en esta parte se muestra la pregunta y respuesta de la pregunta que vamos a EDITAR-->
            <textarea class="pr" name="pregunta" require><?php echo $row['pregunta'];?></textarea>

            <textarea class="pr" name="respuesta" require><?php echo $row['respuesta'];?></textarea>



        </div>
    </div>

    <div class="contenedor3">
        
            <input type="submit" value = "Enviar" name="enviar" class="boton">

        <button class="boton2" onclick="location.href='mantenimiento.php'" type="button">Salir</button>
    
    </div>

</form>

<?php }    
                                      
                                      ?> 

<!-- en esta parte se Guarda los cambios realizado a la pregunta, Además valida si se modificó o si no se pudo modificar-->
<?php
    if(isset($_POST['enviar'])){
        $cod = $_POST['cod'];
        $preg = $_POST['pregunta'];
        $resp= $_POST['respuesta'];
        $proceso = new Mantenimiento();
        ?>

        <script>
            var frm=document.form1;
            frm.style.display="none"    
            </script>
           
        <?php 
        $wasSaved = $proceso->Editar_perfil($cod,$preg,$resp);
        if($wasSaved){
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
        <button class="boton2" onclick="location.href='mantenimiento.php'" type="button">Salir</button>
        </div>
        <?php

    }
?>    

</body>
</html>