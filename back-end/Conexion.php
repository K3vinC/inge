<?php
DEFINE("DB_HOST","mariadb-17648-0.cloudclusters.net");
DEFINE("DB_USER","fisc");
DEFINE("DB_PASS","fisc2021*");
DEFINE("DB","fisc_games");

class Conexion
{
    function Conectar(){
        //return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB);
         return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB,"17664");
    }
}