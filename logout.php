<?php
    session_start();

    session_unset();

    session_destroy();

    header('Location: ');//<---- poner la direccion de donde se inicio la operacion
    //mata todas las seciones abiertas 
?>