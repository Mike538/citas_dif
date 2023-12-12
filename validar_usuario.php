
<?php
// Datos de conexión a la base de datos
$servername = "127.0.0.1"; // servidor MySQL 
$username = "root"; // nombre de usuario DB
$password = ""; // contraseña de DB
$dbname = "usuarios"; // Nombre de base de datos

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si se envió un formulario con datos de usuario y contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['Contraseña']; 

    // Consulta para buscar al usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND Contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // redireccionar al usuario si existen las redenciales en la DB
        header("Location: InicioAdmin.html");
        exit();
    } else {
        // Si no existe o las credenciales son incorrectas mandar error
        header("Location: index.html?error=true");
        exit();
    }
}

$conn->close();
?>
