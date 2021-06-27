<?php
	require('templates/header.php');
?>

<div class="container">
    <div class=" m-4 position-relative " style="height:500px;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle" style="width:450px;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;"
                    type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i
                            class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Recuperar contraseña.
            </div>
            <form class="justify-content-center m-3">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">cedula.</span>
                    <input type="text" class="form-control" placeholder="9-999-999" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="ejemplo@email.com"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@email.com</span>
                </div>

                <div id="emailHelp" class="form-text">En tal caso que ya cuentes con una cuenta -> <a
                        href="index.php">Inicia secion.</a></div><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button"
                        style="border-radius: 5px;">
                        <i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Continuar</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php 
	require('templates/footer.php');
?>