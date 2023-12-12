<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <style>
        /* Estilo para los botones */
        .button-container {
            margin-bottom: 20px;
        }

        .button {
            margin-top: 40px;
            padding: 25px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
            background-color: #f2f2f2;
        }

        .button.active {
            background-color: #ddd;
        }

        /* Estilo para el mensaje de bienvenida */
        .welcome-message {
            margin-right: 10px;
            margin-bottom: 20px;
            font-size: 25px;
            font-weight: 800;
        }
    </style>
    <title>Admin Panel</title>
</head>
<body style="background-image: url('images/curry.jpg');">
    <div class="container" id="container">
        <!-- Mensaje de bienvenida -->
        <div class="welcome-message">
            <p>Bienvenido Admin</p>
        </div>

        <!-- Botones para alternar entre agregar y borrar eventos -->
        <div class="button-container">
            <div class="button active" onclick="redirectToPage('agregar')" title="Agregar Evento">Agregar Evento</div>
            <div class="button" onclick="redirectToPage('borrar')" title="Borrar Evento">Borrar Evento</div>
            <form action="php/logout.php" method="post">
                <button type="submit" class="button" title="Logout">Logout</button>
            </form>

        </div>
    </div>

    <script>
        // Función para redirigir a otra página
        function redirectToPage(pageName) {
            if (pageName === 'agregar') {
                window.location.href = 'AdminAgregar.php'; // Reemplaza con la ruta de tu página
            } else if (pageName === 'borrar') {
                window.location.href = 'AdminBorrar.php'; // Reemplaza con la ruta de tu página
            }
        }
    </script>
</body>
</html>


