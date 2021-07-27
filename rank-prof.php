<?php
require('templates/header.php');
require('conn/db_connect.php');

session_start();

$message = '';
$c = "";

//colocar variable sesion
$profesor_id = $_SESSION["ced"];

//Este codigo trae los grupos que pertenecen al profesor
$sql1 = "SELECT codigo FROM grupo WHERE ID_prof LIKE '%$profesor_id%' ";
$stmt1 = $conn->prepare($sql1);
$stmt1->execute();
$botones = $stmt1->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container" style="height: 90%; width: auto;">
    <div class=" m-4 position-relative " style="height: 85vh; width: auto;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle" style="width:45%;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;" type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Ranking. Grupo <?php
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            // guarda el valor en una variable del boton con el name 'bname'
                                            $name = $_POST['bname'];
                                        }
                                        echo $name;
                                        ?>
            </div>

            <table class="table table-dark table-striped" class="p-3">
                <thead>
                    <tr>
                        <th scope="col">Pts</th>
                        <th scope="col">Participante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // guarda el valor en una variable del boton con el name 'bname'
                        $name = $_POST['bname'];
                    }


                    $sql2 = "SELECT  sg.score, s.firstname, s.lastname
                    FROM usuario AS s 
                    INNER JOIN usuario_grupo_juego AS sg
                        ON s.ID_usuario = sg.ID_usuario
                    INNER JOIN grupo AS g
                        ON sg.ID_grupo = g.ID_group
                    WHERE g.codigo LIKE '%$name%' AND sg.ID_juego LIKE '7'
                    ORDER BY sg.score DESC";

                    $stmt2 = $conn->prepare($sql2);

                    $stmt2->execute();
                    $usuarios = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($usuarios as $usuario) {

                    ?>
                        <tr class="table-info table-active">
                            <td>
                                <?php echo $usuario['score'] ?>
                            </td>
                            <td>
                                <?php echo $usuario['firstname'] ?>
                                <?php echo $usuario['lastname'] ?>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>

            </table>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button" style="border-radius: 5px;
    "><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Continuar</button>
            </div>
        </div>
        <div class="bg-light rounded border position-absolute top-50  translate-middle p-2" style="text-align: center; box-shadow: 0 .5rem 1rem rgba(0,0,0,0.35)!important;">
            <p class="h6 lead" style="margin: 0px 0px 0px 10px;">Grupos.</p><br>

            <?php
            //coloca los botones y envia el valor de los botones en un metodo POST
            foreach ($botones as $boton) {
            ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" style="border-radius: 5px;" name="bname" value="<?php echo $boton['codigo'] ?>">
                        <?php echo $boton['codigo'] ?>
                    </button><br>

                </form>
            <?php
            }
            ?>


        </div>
    </div>
</div>

</div>
<?php
require('templates/footer.php');
?>