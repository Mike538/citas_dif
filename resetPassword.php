<?php

// Verifica que el nombre de usuario no esté vacío.
if (empty($_POST["username"])) {
  echo "El nombre de usuario no puede estar vacío.";
  exit();
}

// Verifica que la nueva contraseña no esté vacía.
if (empty($_POST["newPassword"])) {
  echo "La nueva contraseña no puede estar vacía.";
  exit();
}

// Conecta a la base de datos.
$db = new PDO("mysql:host=localhost;dbname=usuarios", "devmike", "12345");

// Obtiene el nombre de usuario del usuario.
$username = $_POST["username"];

// Obtiene la nueva contraseña del usuario.
$newPassword = $_POST["newPassword"];

// Encripta la nueva contraseña.
$newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

// Actualiza la contraseña del usuario en la base de datos.
$sql = "UPDATE usuarios SET password=:newPasswordHash WHERE username=:username";
$stmt = $db->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":newPasswordHash", $newPasswordHash);
$stmt->execute();

// Redirecciona al usuario a la página de inicio.
header("Location: index.html");
