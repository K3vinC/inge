<?php
    
    require('conn/db_connect.php');session_start();
    require('templates/header.php');
    $message = '';
 /*   if (!empty($_POST['nombre']) && !empty($_POST['pass'])){
        echo 'Username password combination is wrong!';
        $cedula= $_POST['cedula'];
        $pass = $_POST['pass'];
        $sql=$conn->prepare("SELECT `nombre`, `email`, `pass`, `cedula` FROM `usuario` WHERE `cedula` = $cedula");
        $sql->bindParam("cedula", $cedula, PDO::PARAM_STR);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        
        //no verificando porrqueeeeeee 
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } elseif (password_verify($pass, $result['pass'])) {
                    $_SESSION['cedula'] = $result['cedula'];
                    header("Location: http://localhost/est-opc.php");
                    echo '<p class="success">Congratulations, you are logged in!</p>';
                } else {
                    echo '<p class="error">Username password combination is wrong!</p>';
                }
    }
    https://www.youtube.com/watch?v=37IN_PW5U8E&t=338s
    */
    if (isset($_SESSION['cedula'])) {
        header('Location: /index');
    }
    //no verificando porrqueeeeeee 
    if (!empty($_POST['cedula']) && !empty($_POST['pass'])) {
        $cedula=$_POST['cedula'];
        $records = $conn->prepare('SELECT cedula, pass, password FROM usuario WHERE cedula ='+$cedula);
        $records->bindParam(':cedula', $_POST['cedula']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $message = '';
    
    if (count($results) > 0 && password_verify($_POST['pass'], $results['pass'])) {
        $_SESSION['cedula'] = $results['cedula'];
        header("Location: /est-opc.php");
    } else {
        $message = 'Sorry, those credentials do not match';
    }
    }





?>

<div class="container">
    <div class=" m-4 position-relative " style="height:500px;">
        <div class="bg-light rounded shadow border position-absolute top-50 start-50 translate-middle"
            style="width:450px;">
            <div class="card-header rounded-top">Log-in</div>

            <form class="justify-content-center m-3" action="index.php" method="post">
                <div class="mb-3">
                    <label  name="cedula" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="8-888-88">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputPassword1" name="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su password">
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button" value="Send"
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

            <div class="card-footer">
                <small class="text-muted">

                    <div id="emailHelp" class="form-text">En tal caso de olvidar su password -> <a
                            href="/rec-pass.php">Recuperar.</a></div>
                    <div id="emailHelp" class="form-text">En tal caso que seas nuevo -> <a
                            href="/sig-in.php">Registrate.</a></div>
                </small>
            </div>

        </div>
    </div>
</div>

<?php 
	require('templates/footer.php');
?>