<?php
    $server = 'localhost';
    $username ='root';
    $password='';
    $database ='dysyquest';//cambiar nombre a la bd para el proyect
    $conn;
try{
    $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
} catch(PDOEcxeption $e) {
    die('Connected failed: '.$e->getMessage());
}

 // se realiza el connect al bd 