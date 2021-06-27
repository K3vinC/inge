<?php
	require('templates/header.php');
    require('conn/db_connect.php');


?>

<div class="container">
    <div class=" m-4 position-relative " style="height:500px;">
        <div class="bg-light rounded border position-absolute top-50 start-50 translate-middle" style="width:450px;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;"
                    type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i
                            class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Menu, Bienvenido estudiante.&nbsp;&nbsp;<i class="fas fa-user-graduate h5"style="color:gray;"></i>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto m-3 p-3">
                <button class="btn btn-secondary  btn-outline-light" type="button" style="border-radius: 5px;
    clip-path: polygon(87% 0, 0 0, 0 100%, 87% 100%, 100% 51%);"><i class="fas fa-graduation-cap"></i>
                    &nbsp; Modificar perfil</button>
                <button class="btn btn-secondary  btn-outline-light" type="button" style="border-radius: 5px;
    clip-path: polygon(87% 0, 0 0, 0 100%, 87% 100%, 100% 51%);"><i class="fas fa-play-circle"></i>
                    &nbsp; Jugar</button>
                <button class="btn btn-secondary  btn-outline-light" type="button" style="border-radius: 5px;
    clip-path: polygon(87% 0, 0 0, 0 100%, 87% 100%, 100% 51%);"><i class="fas fa-map-marker-alt"></i>
                    &nbsp; Rankig</button>
                <button class="btn btn-secondary  btn-outline-light" type="button" style="border-radius: 5px;
    clip-path: polygon(87% 0, 0 0, 0 100%, 87% 100%, 100% 51%);"><i class="fas fa-sign-out-alt"></i>
                    &nbsp; Salir</button>
            </div>

        </div>
    </div>
</div>










<?php 
	require('templates/footer.php');
?>