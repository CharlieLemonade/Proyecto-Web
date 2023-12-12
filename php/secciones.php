<?php
include 'php/conexion.php';

// Consulta para obtener todas las secciones
$sql = "SELECT seccion_id, nombre_seccion, precio_boleto, imagen FROM secciones";
$result = mysqli_query($conexion, $sql);

// Verifica si la consulta fue exitosa
if ($result) {
    // Itera sobre los resultados
    while ($fila = mysqli_fetch_assoc($result)) {
        $seccionId = $fila['seccion_id'];
        $nombreSeccion = $fila['nombre_seccion'];
        $precioSeccion = $fila['precio_boleto'];
        $imagenSeccion = $fila['imagen'];

        // Genera la tarjeta para cada sección
        echo '<a href="#" class="card-link" style="text-decoration: none">
        <div class="card" onclick="mostrarMensaje(\'' . $nombreSeccion . '\')">
                        <img src="' . $imagenSeccion . '" alt="' . $nombreSeccion . '">
                        <div>
                            <h2 class="precio">$' . $precioSeccion . '</h2>
                            <p style="color: #216302">Amazing Deal</p>
                            <p style="color: #525252">Section ' . $nombreSeccion . '</p>
                            <br>
                            <label style="color: #525252" for="cantidadAsientos">Cantidad de Asientos:</label>
                            <input type="number" id="cantidadAsientos-' . $seccionId . '" name="cantidadAsientos" value="1" min="1" style="display: none;">
                            <div class="input-spinner">
                                <button class="spinner-btn" onclick="decrementSpinner(' . $seccionId . ')">-</button>
                                <span id="spinner-value-' . $seccionId . '">1</span>
                                <button class="spinner-btn" onclick="incrementSpinner(' . $seccionId . ')">+</button>
                            </div>
                            <br>
                            <div id="button" onClick= "" ><a href="php/Compra.php?evento='.$_GET['nombreEvento'].'&seccion='.$nombreSeccion.'">Comprar</a></div>
                            <br>
                            <div class = "paypalButt"id="paypal-button-container-' . $seccionId . '"></div>
                        </div>
                    </div>
                </a>';

        // Include the PayPal button rendering script for each section
        echo '<script>
                paypal.Button.render({
                    env: "sandbox", // Change to "production" in a live environment
                    style: {
                        label: "buynow",
                        fundingicons: true,
                        branding: true,
                        size:  "small",
                        shape: "rect",
                        color: "gold"
                    },
                    client: {
                        sandbox: "AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R",
                        production: "AWVsoQ6ssmxZPncaVrTJPfEXR0Syxlyxx9xOtH7FQATIrgfEpJoGJqaMg_uQxQlOnxO4D9Cu5egrZ7DH"
                    },
                    commit: true,
                    payment: function(data, actions) {
                        return actions.payment.create({
                            transactions: [
                                {
                                    amount: { total: "' . $precioSeccion . '", currency: "USD" }
                                }
                            ]
                        });
                    },
                    onAuthorize: function(data, actions) {
                        return actions.payment.execute().then(function() {
                            window.alert("Payment Complete!");
                        });
                    }
                }, "#paypal-button-container-' . $seccionId . '");
            </script>';
    }
} else {
    echo "Error al obtener las secciones de la base de datos.";
}

// Cierra la conexión
mysqli_close($conexion);
?>


