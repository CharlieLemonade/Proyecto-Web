<?php
include("conexion.php");
// Crear una conexión a la base de datos

// Variables con los valores que deseas actualizar
$id_evento = $_GET['evento'];
$id_seccion = $_GET['seccion'];

$sqls = "SELECT seccion_id FROM secciones WHERE nombre_seccion = ?";

// Preparar la consulta
$stmt = $conexion->prepare($sqls);

// Vincular los parámetros
$stmt->bind_param("s", $id_seccion);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Vincular el resultado a una variable
    $stmt->bind_result($seccion_id);

    // Obtener el resultado
    $stmt->fetch();

    // Usar el valor de $seccion_id
    echo "La consulta se realizó correctamente. El seccion_id es: " . $seccion_id;

    // Puedes seguir utilizando $seccion_id en el resto de tu código
    // ...
    header("Location: ../index.php");
} else {
    echo "Error al ejecutar la consulta: " . $stmt->error;
    
}

// Consulta SQL para actualizar la tabla 'boletos'
$sql = "UPDATE boletos SET capacidad = capacidad - 1 WHERE id_evento = ? AND id_seccion = ?";

// Preparar la consulta
$stmt = $conexion->prepare($sql);

// Vincular los parámetros
$stmt->bind_param("ii", $id_evento, $seccion_id); // Usar $seccion_id obtenido en la consulta anterior

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "La actualización se realizó correctamente.";
} else {
    echo "Error al actualizar: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();

header("Location: index.php");
?>