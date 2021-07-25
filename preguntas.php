<?php
	require('templates/header.php');
    ?>

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