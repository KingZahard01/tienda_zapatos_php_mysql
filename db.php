<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "KG5rQWK^^u!pHbz3";
$dbname = "nombre_tienda";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
