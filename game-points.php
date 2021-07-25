<?php
require('templates/header.php');
require('conn/db_connect.php');
$message = '';
$c = "";

//COLOCAR EN "Lowin" el session del nombre del user

$user_session = 'Lowin';

$sql = "SELECT score FROM usuario_grupo_juego 
        WHERE username LIKE '%$user_session%' AND ID_juego LIKE '7'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$puntos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT score, username FROM usuario_grupo_juego 
        WHERE ID_juego LIKE '7'
        ORDER BY score DESC
        LIMIT 10";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$usuarios = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="height: 90%; width: auto;">
    <div class=" m-4 position-relative " style="height: 85vh; width: auto;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle" style="width:45%;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;" type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Ranking.
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
                    foreach ($usuarios as $usuario) {
                        $puntaje = $usuario['score'];
                    ?>
                        <tr class="table-info table-active">
                            <td>
                                <?php echo $usuario['score'] ?>
                            </td>
                            <td>
                                <?php echo $usuario['username'] ?>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>


            </table>
            <p class="h6 lead" style="margin: 0px 0px 0px 10px;">Siempre aspira a llegar a una mejor version de ti ;).</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button" style="border-radius: 5px;
    "><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Continuar</button>
            </div>
        </div>
        <div class="bg-light rounded border position-absolute top-50 p-2" style="text-align: center; box-shadow: 0 .5rem 1rem rgba(0,0,0,0.35)!important;">
            <?php
            //coloca los botones y envia el valor de los botones en un metodo POST
            foreach ($puntos as $puntaje2) {
            ?>
                <p class="h6 p-1" style="margin: 0px 0px 0px 0px; ">Tus puntos obtenidos son:
                    <br><?php echo $puntaje2['score'] ?>
                </p>
            <?php } ?>
        </div>
    </div>
</div>
<?php
require('templates/footer.php');
?>