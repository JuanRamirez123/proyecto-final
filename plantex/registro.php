<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<link rel="stylesheet" href="../stylees/estiloregistro.css">
<body>

<h2>Registro de Nuevo Usuario</h2>

<form method="post" action="">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="usuario">Usuario:</label><br>
    <input type="text" id="usuario" name="usuario"><br><br>

    <label for="contrasenia">Contraseña:</label><br>
    <input type="password" id="contrasenia" name="contrasenia"><br><br>

    <input type="hidden" id="id_cargo" name="id_cargo" value="2"> <!-- Valor fijo: 2 -->

    <input type="submit" value="Registrar Usuario" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "id20731958_sergio";
    $password = "Sergio#17";
    $dbname = "id20731958_plantex";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contrasenia'];
    $id_cargo = $_POST['id_cargo'];

    $sql = "INSERT INTO usuarios (nombre, usuario, contraseña, id_cargo) VALUES ('$nombre', '$usuario', '$contraseña', $id_cargo)";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>