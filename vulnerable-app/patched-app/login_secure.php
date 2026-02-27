<?php
// CONEXIÓN SEGURA
$conn = new mysqli("localhost", "root", "", "seguridad_db");

$username = $_POST['username'];
$password = $_POST['password'];

// LA SOLUCIÓN: Sentencias preparadas para evitar SQL Injection
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE user = ? AND pass = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Acceso concedido de forma segura.";
} else {
    echo "Credenciales incorrectas.";
}
?>
