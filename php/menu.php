<?php
    include 'php/conexion.php';

    //session_start();

    // Verificar si hay una sesión activa
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $firstLetter = strtoupper(substr($username, 0, 1));
    } else {
        $firstLetter = '';  }

?>


