<?php
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
    <link rel="stylesheet" href="front-end/Vista.css">
    <title>Vista <?= $_SESSION["tipo"]?></title>
</head>

<body>

<center>
    <h1>DySy Quest</h1>
    <h1><?= $_SESSION["tipo"]?></h1>
</center>

<!-- Valida que tipo de usuario es, para mostrar la pantalla correspondiente-->
<?php
if($_SESSION["tipo"]=="estudiante"){
?>
<div class="contenedor">
    <button class="boton" onclick="location.href='modificar_perfil.php'" type="button"><b>Modificar Perfil</b></button>
    <button class="boton" onclick="location.href='jugar.php'" type="button"><b>Jugar</b></button>
    <button class="boton" onclick="location.href='ranking.php'" type="button"><b>Ranking</b></button>
    <button class="boton" onclick="location.href='back-end/Logout.php'" type="button"><b>Salir</b></button>
</div>

<?php
}
else if($_SESSION["tipo"]=="profesor"){
?>

<div class="contenedor">
    <button class="boton" onclick="location.href='modificar_perfil.php'" type="button"><b>Modificar Perfil</b></button>
    <button class="boton" onclick="location.href='mantenimiento.php'" type="button"><b>Mantenimiento de preguntas</b></button>
    <button class="boton" onclick="location.href='modificar_reglas.php'" type="button"><b>Modificar Reglas</b></button>
    <button class="boton" onclick="location.href='ranking.php'" type="button"><b>Ranking</b></button>
    <button class="boton" onclick="location.href='back-end/Logout.php'" type="button"><b>Salir</b></button>
</div>

<?php 
}
else{
?>

<div class="contenedor">
    <button class="boton" onclick="location.href='administrar_usuario.php'" type="button"><b>Administrar usuario</b></button>
    <button class="boton" onclick="location.href='ranking.php'" type="button"><b>Ranking</b></button>
    <button class="boton" onclick="location.href='back-end/Logout.php'" type="button"><b>Salir</b></button>
</div>

<?php }
?>
</body>
</html>