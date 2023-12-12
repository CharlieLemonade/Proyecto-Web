<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar PDF</title>
</head>
<body>

    <button id="downloadBtn">Descargar PDF</button>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            // Redirecciona a la página PHP que genera el PDF
            window.location.href = 'generate_pdf.php';
        });
    </script>

</body>
</html>

