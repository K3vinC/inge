<?php
    define('TITULO','Proyecto Semestral');
        include('back-end/Login.php');
        session_start();
        require('templates/header.php');
?>

<main class="form-signin"> <img class="mb-4" src="front-end/imagenes/icono.png" alt="" width="100" height="80">
    <div class="container">
        <div class=" m-4 position-relative " style="height:500px;">
            <div class="bg-light rounded shadow border position-absolute top-50 start-50 translate-middle"
                style="width:450px;">
                <div class="card-header rounded-top">Ajustes</div>

                <div class="container">
                    <div class="row">
                        <div class="span9">
                            <div class="row"><br>

                                <div class="span4 p-2">
                                    <button class="btn btn-small" type="button" id="play"><i class="icon-play"></i>
                                        Play</button>
                                    <button class="btn btn-small" type="button" id="pause"><i class="icon-pause"></i>
                                        Pause</button>
                                    <button class="btn btn-small" type="button" id="stop"><i class="icon-stop"></i>
                                        Stop</button>
    
                                </div>
                                <br>
                                <label for="customRange1" class="form-label">Tamaño de texto</label><br>
                                <div class="span4 p-2 btn-group" role="group" aria-label="Basic outlined example" >
                                    
                                    <button class="btn btn-outline-primary btn-small" type="button">
                                    <span class="span5"style="font-size: 16px;"><i class="bi bi-aspect-ratio-fill"> Texto</i></span></button>
                                    
                                    <button class="btn btn-outline-primary btn-small" type="button">
                                    <span class="span5"style="font-size: 18px;"><i class="bi bi-aspect-ratio-fill"> Texto</i></span></button>
                                    
                                    <button class="btn btn-outline-primary btn-small" type="button">
                                    <span class="span5"style="font-size: 20px;"><i class="bi bi-aspect-ratio-fill"> Texto</i></span> </button>


                                </div>
                            


                                <div class="span5 p-2">
                                    <label for="customRange1" class="form-label">Volumen</label><br>
                                    <input type="range" class="form-range" id="volume" min="0" max="100">
                                    <span class="badge badge-inverse" id="volumeLabel"></span>

                                </div>





                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input type="submit" class="w-100 btn btn-lg btn-primary" name="enviar"
                                        value="Guardar y regresar"><br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>











            </div>
        </div>
    </div>
</main>
<?php 
	require('templates/footer.php');
?>