<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "tickets_db";
$port = 3306;

// Crea la conexión
$conexion = mysqli_connect($servername, $username, $password, $bd, $port);

// Verifica la conexión
if (!$conexion) {
    die("Conexión fallida");
}
?>
