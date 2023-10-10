<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
</head>
<body>
    <h1>Datos del Usuario</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre = $_GET["nombre"];
        $edad = $_GET["edad"];
        $correo = $_GET["correo"];
        
        echo "<p>Tu nombre es: $nombre</p>";
        echo "<p>Tu edad es: $edad</p>";
        echo "<p>Tu correo es: $correo</p>";
    }
    ?>
</body>
</html>
