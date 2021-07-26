<?php
    define('TITULO','Proyecto Semestral');
        include('back-end/Login.php');
        session_start();
        require('templates/header.php');
?>

<title>Document</title>

<main class="form-signin"> 
    <div class="container">
        <div class=" m-4 position-relative " style="height:500px;">
            <div class="bg-light rounded shadow border position-absolute top-50 start-50 translate-middle"
                style="width:450px;">
                <div class="card-header rounded-top">Iniciar sesión</div>


                <form class="justify-content-center m-3" name="form1" method='POST'>
                <div class="mb-3">
                    <label  name="cedula" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='usuario' required  placeholder="Nombre Usuario">
                </div>

                <div class="mb-3 ">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Contraseña" name="contra" required>
                </div>

                    <!-- ESTA FUNCIONALIDAD RECUÉRDAME NO ESTA FUNCIONANDO, NO LA HE PUESTO A FUNCIONAR-->

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="remember-me">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Recuérdame</label>
                    </div>
                    &nbsp;
                    
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="w-100 btn btn-lg btn-primary" name="enviar" value="Iniciar">    
                    </div>


                        <!-- ESTA FUNCIONALIDAD RECUÉRDAME NO ESTA FUNCIONANDO, NO LA HE PUESTO A FUNCIONAR
                    
                    -->

                                <?php
                    if(isset($_POST['enviar'])){
                        $usuario = $_POST['usuario'];
                        $contra= $_POST['contra'];
                        $proceso = new Login($usuario,$contra);

                            if($proceso->Verificar()==true){
                            ?>
                                <script>
                                var frm = document.form1;
                                frm.style.display = "none"
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







                    <?php if(!empty($message)&&!empty($c)): ?>
                    <div class="alert alert-primary" role="alert" style="200px">
                        <?= $message; ?>
                    </div>
                    <?php elseif(!empty($message)):?>
                    <div class="alert alert-danger" role="alert" style="200px">
                        <?= $message; ?>
                    </div>
                    <?php endif; ?>

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


            </div>
        </div>
    </div>
</main>
</body>

</html>