<?php
	require('templates/header.php');
?>
<div class="container">
    <div class=" m-4 position-relative " style="height:500px;">
        <div class="bg-light shadow rounded border position-absolute top-50 start-50 translate-middle"
            style="width:450px;">
            <div class="card-header rounded-top">
                <button class="btn border-2" style="color:gray; border-color: transparent #00000061 transparent transparent;"
                    type="button" id="button-addon1"><a style="color: darkgray;" href="index.php"><i
                            class="fas fa-angle-double-left"></i></a></button>
                &nbsp;
            Reporte</div>
            <form class="justify-content-center m-3">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reportar error</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button"
                        style="border-radius: 5px;">
                        <i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Reportar</button>
                </div>
            </form>

        </div>
    </div>
</div>













<?php 
	require('templates/footer.php');
?>