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
                &nbsp; Ranking. Grupo 1LS132
            </div>

            <table class="table table-dark table-striped" class="p-3">
                <thead>
                    <tr>
                        <th scope="col">Pts</th>
                        <th scope="col">Participantes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info table-active">
                        <th scope="row">98</th>
                        <td>Leonardo</td>
                    </tr>
                    <tr>
                        <th scope="row">92</th>
                        <td>Raffaello</td>

                    </tr>
                    <tr>
                        <th scope="row">90</th>
                        <td>Donato</td>

                    </tr>
                    <tr>
                        <th scope="row">89</th>
                        <td>Michelangelo</td>

                    </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button" style="border-radius: 5px;
    "><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Continuar</button>
            </div>
        </div>
        <div class="bg-light rounded border position-absolute top-50  translate-middle p-2"
            style="text-align: center; box-shadow: 0 .5rem 1rem rgba(0,0,0,0.35)!important;">
            <p class="h6 lead" style="margin: 0px 0px 0px 10px;">Grupos.</p><br>
            <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button" style="border-radius: 5px;">
            <i class="fas fa-code-branch"></i>&nbsp;&nbsp;1LS132</button><br>
            <button type="submit" class="btn btn-secondary m-3 shadow btn-outline-light" type="button" style="border-radius: 5px;">
            <i class="fas fa-code-branch"></i>&nbsp;&nbsp;1LS142</button>
        </div>
    </div>
</div>
</div>
<?php 
	require('templates/footer.php');
?>