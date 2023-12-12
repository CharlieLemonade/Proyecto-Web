<?php
include 'conexion.php';

// Consulta SQL para obtener eventos
$sql = "SELECT nombre_evento, fecha_evento, ubicacion, imagen FROM eventos";
$result = $conexion->query($sql);

// Mostrar tarjetas basadas en datos de la base de datos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<article class="card__article swiper-slide">';
        echo '<div class="card__image">';
        echo '<img src="' . $row["imagen"] . '" alt="' . $row["nombre_evento"] . '" class="card__img">';
        echo '</div>';

        echo '<div class="card__data">';
        echo '<h3 class="card__name">' . $row["nombre_evento"] . '</h3>';
        echo '<p class="card__description">' . $row["ubicacion"] . '</p>';
        echo '<a href="venta2.php?nombreEvento=' . $row["nombre_evento"] . '&ubicacionEvento=' . $row["ubicacion"] .'" class="card__button">View More</a>';
        echo '</div>';
        echo '</article>';
    }
} else {
    echo '<p>No hay eventos disponibles.</p>';
}

// Cierra la conexión
mysqli_close($conexion);
?>

