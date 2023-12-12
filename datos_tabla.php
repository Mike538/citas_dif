<?php
// Realiza la conexión a tu base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "usuarios";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de tu tabla
$sql = "SELECT id, nombre, descripcion FROM tu_tabla";
$result = $conn->query($sql);

// Muestra los datos en la tabla
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["descripcion"] . "</td></tr>";
        // Agrega más celdas según tus columnas de la base de datos
    }
} else {
    echo "<tr><td colspan='3'>No hay datos disponibles</td></tr>";
    // Ajusta el colspan al número de columnas en tu tabla
}
$conn->close(); // Cierra la conexión a la base de datos
?>
