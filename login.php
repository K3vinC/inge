<?php
    define('TITULO','Proyecto Semestral');
        include('back-end/Login.php');
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/Login.css">
    <!-- en esta página si use bootrasp en la demás no-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="text-center">

<main class="form-signin">
  <form name="form1" method='POST'>
    <img class="mb-4" src="front-end/imagenes/icono.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
    <label for="inputEmail" class="visually-hidden">Usuario</label>
    <input type="text" class="form-control" placeholder="Nombre Usuario" name='usuario' required>
    <label for="inputPassword" class="visually-hidden">Contraseña</label>
    <input type="password" class="form-control" placeholder="Contraseña" name="contra" required>
    <!-- ESTA FUNCIONALIDAD RECUÉRDAME NO ESTA FUNCIONANDO, NO LA HE PUESTO A FUNCIONAR-->
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <input type="submit" class="w-100 btn btn-lg btn-primary" name="enviar" value="Enviar">
    
    
  </form>


<!--si el usuario le da click al boton enviar valida si la contraseña es correcta o incorrecta 
si es correcta se va al if donde desaparece el formulario de usuario y le muestra el boton de comenzar, sino se va al else
-->

    <?php
    if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario'];
        $contra= $_POST['contra'];
        $proceso = new Login($usuario,$contra);

            if($proceso->Verificar()==true){
            ?>
            <script>
            var frm=document.form1;
            frm.style.display="none"    
            </script>
            <form action="vista.php" class="form2" method='POST'>
                <h2>Bienvenido haga click Aquí</h2>  
        <input type="submit" class="btn-comenzar" name="comenzar" value="Comenzar">
            </form>

    <?php
            }
            
            else{
            ?>
            <p class="error">Usuario o Contraseña incorrecta</p>
            <?php
            die();
            }  
}

?>
</main>
</body>
</html>