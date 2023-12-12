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
    <form action="php/borrarEvento.php" method="post">
                <h2>Admin Panel - Borrar Evento</h2>

                <!-- Campo oculto para el ID del evento a borrar -->
                <label for="evento_id">ID del Evento a Borrar:</label>
                <input type="number" id="evento_id" name="evento_id" required>

                <button type="submit">Borrar Evento</button>
                            <!-- Button to go back -->
            <button type="button" onclick="window.history.back();">Regresar</button>
            </form> 
    </div>
</body>
</html>