<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Admin Panel</title>
</head>
<body style="background-image: url('images/curry.jpg');">
    <div class="container" id="container">
        <form action="php/AdminAgregar.php" method="post">
            <h2>Admin Panel - Gestionar Eventos</h2>

            <label for="nombreEvento">Nombre del Evento:</label>
            <input type="text" id="nombreEvento" name="nombreEvento" required>

            <label for="fechaEvento">Fecha del Evento:</label>
            <input type="date" id="fechaEvento" name="fechaEvento" required>

            <label for="ubicacionEvento">Ubicación del Evento:</label>
            <input type="text" id="ubicacionEvento" name="ubicacionEvento" required>

            <label for="imagenEvento">URL de la Imagen (opcional):</label>
            <input type="text" id="imagenEvento" name="imagenEvento">

            <button type="submit" name="accion" value="agregar">Agregar Evento</button>
            
            <!-- Button to go back -->
            <button type="button" onclick="window.history.back();">Regresar</button>
        </form>
    </div>
</body>
</html>

