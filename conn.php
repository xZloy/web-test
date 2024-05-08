<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'empresaexamen';
$conn = mysqli_connect($host, $user, $pass, $database);
    if($conn){
        echo 'Conexion exitosa a'.$database;

    }

?>