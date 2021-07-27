<?php
    include('back-end/Jugar.php');
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
    <link rel="stylesheet" href="front-end/jugar_nivel2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php   
        $i=$_SESSION["id_p"];        
        $conn = new Conexion();
        $con = $conn->Conectar();
        $query = "SELECT * from dysy_preguntas_respuesta WHERE ID_preg='".$i."';";
        $result_tasks = mysqli_query($conn->Conectar(), $query);
        $row =mysqli_fetch_assoc($result_tasks);  
        if(!$row > 0){

            if($_SESSION["puntaje"]>=185){
                $_SESSION["id_p"]=50; 
            ?>

            <div class="contenedor2">
            <button class="boton" onclick="location.href='jugar_nivel3.php'" type="button">Siguiente Nivel</button>
            <h4>¡Felicidades ha completado el Nivel!</h4>
            </div>   

            <?php
            $proceso = new Jugar();
            $proceso->Agregarpuntaje($_SESSION["ced"],$_SESSION["puntaje"]);
            }
            else{
                $_SESSION["id_p"]=20; 
            ?>

            <div class="contenedor2">
            <button class="boton" onclick="location.href='jugar_nivel2.php'" type="button">Volver a intentar</button>
            <button class="boton2" onclick="location.href='vista.php'" type="button">Salir</button>
            </div>

            <?php
                }
            }
            else{
                $proceso = new Jugar();
                $val1=$proceso->ValorAleatorio();
                $val2=$proceso->ValorAleatorio();
                $val3=$proceso->ValorAleatorio();
                $Arrayopcion = array($val1,$val2,$val3,$row['respuesta']);
                shuffle($Arrayopcion);


        ?>
        
        <script>
        var frm=document.form2;
        frm.style.display="none"    
        </script>
        

<form name="form1" method='POST'>

<div class="contenedor">
    <h2> <?php echo $row['pregunta']; ?></h2>
    <!--<p >Genero: </p> --> 
            <label><input type="radio" name="opcion" value='<?php echo $Arrayopcion[0]; ?>' id=""><?php echo $Arrayopcion[0]; ?></label>
            <label><input type="radio" name="opcion" value='<?php echo $Arrayopcion[1]; ?>'  id="" checked><?php echo $Arrayopcion[1]; ?></label>
            <label><input type="radio" name="opcion" value='<?php echo $Arrayopcion[2]; ?>' id=""><?php echo $Arrayopcion[2]; ?></label>
            <label><input type="radio" name="opcion" value='<?php echo $Arrayopcion[3]; ?>'  id=""><?php echo $Arrayopcion[3]; ?></label>

            <input type="submit" class="enviar" name="enviar" value="Enviar">
</div>
</form>

<div id="barra" class="barra">
<div class="Icon">
<i class="fas fa-user-circle"></i>    
<h3><?php echo $_SESSION["usuario"];?></h3>
<h3>&nbsp;&nbsp;Puntaje:<?php echo $_SESSION["puntaje"];?></h3>
</div>
</div>  


<?php }


    if(isset($_POST['enviar'])){
        $res = $_POST['opcion'];
        ?>

        <script>
        var frm=document.form1;
        frm.style.display="none"    
        </script>
        
        <script>
        document.getElementById("barra").style.display = "none";   
        </script>
           
        <?php 

        if($res==$row['respuesta']){
            $_SESSION["puntaje"]=$_SESSION["puntaje"]+5;
            $_SESSION["id_p"]++;
            ?>
            <div name="form2" class="form2">
            <img src="front-end/imagenes/exito.png" width="120" height="120">
            <h2>La respuesta es Correcta</h2>
            <button class="siguiente" onclick="location.href='jugar_nivel2.php'" type="button">siguiente</button>
            
            </div>
            <?php    
        }else{
            $_SESSION["id_p"]++;
            ?>
            <div name="form2" class="form2">
            <img src="front-end/imagenes/incorrecto.png" width="120" height="120">   
            <h2>La respuesta es incorrecta</h2>
            <button class="siguiente" onclick="location.href='jugar_nivel2.php'" type="button">siguiente</button>
            </div>
            <?php
        }

        ?>



<?php   
    }
    ?>
    
</body>
</html>