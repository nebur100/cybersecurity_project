<?php
// CONEXIÓN VULNERABLE
$conn = mysqli_connect("localhost", "root", "", "seguridad_db");

$username = $_POST['username'];
$password = $_POST['password'];

// EL ERROR: Concatenación directa de variables (Vulnerable a SQLi)
$sql = "SELECT * FROM usuarios WHERE user = '$username' AND pass = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "¡Bienvenido, admin!";
} else {
    echo "Login fallido.";
}
?>
