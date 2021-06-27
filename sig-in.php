<?php
	require('templates/header.php');
    require('conn/db_connect.php');
    $message='';
    $c="";

    if(!empty($_POST['nombre'])&&!empty($_POST['email'])&&!empty($_POST['cedula'])&&!empty($_POST['pass'])&&!empty($_POST['pass_c'])){
        $nombre= $_POST['nombre'];
        $email= $_POST['email'];
        $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);//encripta
        $cedula = $_POST['cedula'];
        $sql = "INSERT INTO `usuario`(`nombre`, `email`, `pass`, `cedula`)VALUES ('$nombre','$email','$password','$cedula')";
        $stmt = $conn->prepare($sql);
        
        $p = $_POST['pass'];
        $pc=$_POST['pass_c'];
        if($p == $pc){
        if ($stmt->execute()){
                $message = 'Sactifactorio ingreso';
                $c="1";
            }else{
                $message = 'Surgio un error, verifique los datos';
            }
        }else{
            $message = 'Surgio un error, verifique los datos';
        }

    }
?>

<div class="container">
    <div class=" m-4 position-relative " style="height:500px;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle m-5"
            style="width:450px;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;"
                    type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i
                            class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Registro, ingresa los datos solicitados.
            </div>

            <form class="justify-content-center m-3" action="sig-in.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre de Usuario" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">cedula.</span>
                    <input type="text" class="form-control" name="cedula" placeholder="9-999-999" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email" placeholder="ejemplo@email.com"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@email.com</span>
                </div>

                <label for="basic-url" class="form-label">Contraseña</label>
                <div class="input-group mb-3">
                    <input type="text" placeholder="Contraseña." name="pass" class="form-control" id="basic-url"
                        aria-describedby="basic-addon3">
                    <span class="input-group-text" id="basic-addon3">*</span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" placeholder="Confirmar contraseña." name="pass_c"  class="form-control"
                        aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">*</span>
                </div>

                <div id="emailHelp" class="form-text">En tal caso que ya cuentes con una cuenta -> <a
                        href="index.php">Inicia secion.</a></div><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button"
                        style="border-radius: 5px;">
                        <i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Continuar</button>
                </div>
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

        </div>
    </div>
</div>

<?php 
	require('templates/footer.php');
?>