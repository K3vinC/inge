<?php
    $server = 'mariadb-17648-0.cloudclusters.net;port=17664';
    $username ='fisc';
    $password='fisc2021*';
    $database ='fisc_games';//cambiar nombre a la bd para el proyect
    $conn;
try{
    $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
} catch(PDOEcxeption $e) {
    die('Connected failed: '.$e->getMessage());
}

 // se realiza el connect al bd 