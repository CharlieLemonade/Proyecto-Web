<?php

// Inicializa la variable de mensaje
$mensaje = "";

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include("conexion.php");

    // Recoge los datos del formulario
    $nombreEvento = $_POST["nombreEvento"];
    $fechaEvento = $_POST["fechaEvento"];
    $ubicacionEvento = $_POST["ubicacionEvento"];
    $imagenEvento = $_POST["imagenEvento"];

    // Prepara la consulta SQL para insertar un nuevo evento
    $sql = "INSERT INTO eventos (nombre_evento, fecha_evento, ubicacion, Imagen) VALUES ('$nombreEvento', '$fechaEvento', '$ubicacionEvento', '$imagenEvento')";

    // Ejecuta la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Evento agregado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

        // Cierra la conexión
        $conexion->close();
    }
    ?>
    