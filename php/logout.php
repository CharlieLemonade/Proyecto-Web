<?php
session_start();
session_destroy();
header("Location: ../indexFinal.php"); // Redirige a la página de inicio o a donde desees después de cerrar sesión
exit;
?>