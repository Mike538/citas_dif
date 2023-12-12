<?php
$servername = "localhost";
$username = "devmike";
$password = "12345";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_password'])) {
    if (!$conn) {
        die("La conexión a la base de datos falló");
    }

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validar que las contraseñas coincidan
    if ($password === $confirm_password) {
        // Convertir el número a una cadena para almacenarlo
        $hashed_password = (string)$password; // Convertir el número a una cadena

        $update_query = "UPDATE usuarios SET Contraseña = '$hashed_password' WHERE usuario = '$usuario'";
        
        if ($conn->query($update_query) === TRUE) {
            echo 'Contraseña actualizada correctamente.';
        } else {
            echo 'Error al actualizar la contraseña: ' . $conn->error;
        }
    } else {
        echo 'Las contraseñas no coinciden.';
    }
}

$conn->close();
?>
