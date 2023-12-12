<?php
// Incluye el archivo de conexión
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize y escapar las entradas del formulario
    $username = mysqli_real_escape_string($conexion, $_POST["user-name"]);
    $first_name = mysqli_real_escape_string($conexion, $_POST["user-Real-name"]);
    $last_name = mysqli_real_escape_string($conexion, $_POST["user-last-name"]);
    $email = mysqli_real_escape_string($conexion, $_POST["email"]);
    $password = $_POST["password"];

    // Hash de la contraseña utilizando password_hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    

    // Inserta el nuevo usuario en la base de datos
    $sql = "INSERT INTO users (user_name, email_address, first_name, last_name, user_password) 
            VALUES ('$username', '$email', '$first_name', '$last_name', '$hashed_password')";

    if (mysqli_query($conexion, $sql)) {
        header("Location: ../indexFinal.php");
        exit();
    } else {
        $error_message = "Error al registrar el usuario: " . mysqli_error($conexion);

        echo $username;
    }
}

// Cierra la conexión al finalizar el script
mysqli_close($conn);
?>

