<?php
// Inicializa la variable de mensaje
$mensaje = "";

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["evento_id"])) {
    
    // Incluye el archivo de conexión
    include("conexion.php");  // Reemplaza con la ruta correcta a tu archivo de conexión

    // Recoge el ID del evento a borrar
    $evento_id = $_POST["evento_id"];

    // Prepara la consulta SQL para borrar el evento
    $sql = "DELETE FROM eventos WHERE evento_id = $evento_id";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Evento borrado con éxito.";
    } else {
        $mensaje = "Error al borrar el evento: " . mysqli_error($conexion);
    }

    // Cierra la conexión
    mysqli_close($conexion);
} else {
    // Si no se ha enviado el formulario correctamente, establece un mensaje de error
    $mensaje = "Error: El formulario no se ha enviado correctamente.";
}

// Imprime el mensaje y redirige después de unos segundos
echo '<script>';
echo 'alert("' . $mensaje . '");';
echo 'window.location.href = "../AdminBorrar.php";'; // Reemplaza con la ruta de tu página principal
echo '</script>';
?>

