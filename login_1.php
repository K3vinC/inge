<?php
    define('TITULO','Proyecto Semestral');
        include('back-end/Login.php');
        session_start();
        require('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-end/login.css">
    <!-- en esta página si use bootrasp en la demás no-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="text-center">

<main class="form-signin">
    <div class="container">
        <div class=" m-4 position-relative " style="height:500px;">
            <div class="bg-light rounded shadow border position-absolute top-50 start-50 translate-middle"
                style="width:450px;">
                <div class="card-header rounded-top">Iniciar sesión <a class="navbar-brand" href="#"><img
                            src="https://i2.wp.com/gifmania.co.uk/Animals-Animated-Gifs/Animated-Cats/Cat-Cartoons/Sleepy-Cat-86034.gif"
                            alt="" width="30" height="30"></a>
                </div>





  <form name="form1" class="justify-content-center m-3" method='POST'>
    <img class="mb-4" src="front-end/imagenes/icono.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
    <label for="inputEmail" class="visually-hidden">Usuario</label>
    <input type="text" class="form-control" placeholder="Nombre Usuario" name='usuario' required>
    <label for="inputPassword" class="visually-hidden">Contraseña</label>
    <input type="password" class="form-control" placeholder="Contraseña" name="contra" required>
    <!-- ESTA FUNCIONALIDAD RECUÉRDAME NO ESTA FUNCIONANDO, NO LA HE PUESTO A FUNCIONAR-->
    <div class="form-check form-switch">
      <label class="form-check-label p-2" style="    color: #00000085;">
        <input type="checkbox" class="form-check-input" value="remember-me" > Recuérdame
      </label>
    </div>
    <input type="submit" class="w-100 btn btn-lg btn-primary" name="enviar" value="Enviar">
    
    
  </form>
  <div class="card-footer">
                    <small class="text-muted">

                        <div id="emailHelp" class="form-text">En tal caso de olvidar su password -> <a
                                href="/rec-pass.php">Recuperar.</a></div>
                        <div id="emailHelp" class="form-text">En tal caso que seas nuevo -> <a
                                href="/sig-in.php">Registrate.</a></div>
                    </small>
                </div>


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
            <p class="error p-2" style=" color: #000000b3;">Usuario o Contraseña incorrecta</p>
            <?php
            die();
            }  
}

?>




</main>
</body>
</html>