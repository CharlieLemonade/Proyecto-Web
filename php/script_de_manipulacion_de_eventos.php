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
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $id_evento = $nombreEvento;

// Bucle para realizar inserciones
for ($i = 1; $i <= 10; $i++) {
    // Valor de la sección
    $id_seccion = $i;

    // Consulta SQL para insertar en la tabla 'boletos'
    $sql = "INSERT INTO boletos (capacidad, id_evento, id_seccion) VALUES (50, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("ii", $id_evento, $id_seccion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Inserción realizada correctamente para la sección $id_seccion.<br>";
    } else {
        echo "Error al insertar para la sección $id_seccion: " . $stmt->error . "<br>";
    }

    // Cierra la conexión
    $conexion->close();
}
?>
