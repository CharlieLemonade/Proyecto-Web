<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conexion, $_POST["username"]);
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email_address = '$username'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['user_password'])) {
            // Verificar si el usuario es un administrador
            if ($row['is_admin']) {
                // Usuario es administrador, redirigir a la página de administrador
                $_SESSION['username'] = $username;
                header("Location: ../AdminLogin.php");
                exit();
            } else {
                // Usuario no es administrador, redirigir a la página principal
                $_SESSION['username'] = $username;
                header("Location: ../indexFinal.php");
                exit();
            }
        } else {
            $error_message = "Contraseña incorrecta";
        }
    } else {
        $error_message = "Nombre de usuario no encontrado";
    }

    echo $error_message;
}

mysqli_close($conexion);
?>

