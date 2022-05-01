<?php
$servername = "localhost";
$username = "jhonatan";
$password = "0401";
$dbname = "prueba";

//crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);
//check 
if ($conn->connect_error) {
    die("Falló la conexion: ". $conn->connect_error);
}
?>