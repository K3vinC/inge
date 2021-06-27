<?php
	require('templates/header.php');
    ?>
<!--
    include_once("inc/db_connect.php");
    $sqlQuery = "SELECT id, name, gender, age FROM developers LIMIT 5";
    $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));

    ver link ====>>>> https://webdamn.com/create-editable-bootstrap-table-with-php-mysql/
-->
<div class="container" style="height: 90%; width: auto;">
    <div class=" m-4 position-relative " style="height: 85vh; width: auto;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle"
            style="width:45%;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;"
                    type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i
                            class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Preguntas.
            </div>

            <table class="table table-dark table-striped" class="p-3">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Pregunta</th>
                        <th>Respuesta</th>
                    </tr>
                </thead>
                <tbody>
                    <!--
                    while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
                    <tr id="<php echo $developer ['id']; ?>">
                        <td><php echo $developer ['id']; ?></td>
                        <td><php echo $developer ['pregunta']; ?></td>
                        <td><php echo $developer ['respuesta']; ?></td>
                    </tr>
                    <php }  

                    -->
                </tbody>
            </table>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button"
                    style="border-radius: 5px;">
                    <i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Continuar</button>
            </div>

        </div>
    </div>
    <?php 
	require('templates/footer.php');
?>