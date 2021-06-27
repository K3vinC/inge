<?php
	require('templates/header.php');
?>

<div class="container">
    <div class=" m-4 position-relative " style="height:500px;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle"
            style="width:450px;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="border-color: transparent #00000061 transparent transparent;"
                    type="button" id="button-addon1"><a style="color: darkgray;" href="opc-prof.php"><i
                            class="fas fa-angle-double-left"></i></a></button>
                &nbsp; Reglas del juego. 
            </div>
            <form class="justify-content-center m-3">
                <label for="basic-url" class="form-label">Dificultad</label>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Seleccionar</option>
                    <option value="1">Fácil</option>
                    <option value="2">Medio</option>
                    <option value="3">Difícil</option>
                </select>

                <form class="justify-content-center m-3">
                    <label for="basic-url" class="form-label">Cantidad de preguntas.</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        <option value="1">10</option>
                        <option value="2">20</option>
                        <option value="3">30</option>
                    </select>

                    <label for="basic-url" class="form-label">Tiempo a responder.</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        <option value="1">10s</option>
                        <option value="2">20s</option>
                        <option value="3">30s</option>
                    </select>
                    
                    <label for="basic-url" class="form-label">Modificar preguntas.</label>
                        <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button"
                            style="border-radius: 5px;">
                            <i class="fas fa-pencil-ruler"></i>&nbsp;&nbsp;Modifica</button>

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