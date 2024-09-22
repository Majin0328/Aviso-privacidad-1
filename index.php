<?php
$host = 'localhost';
$user = 'root';
$password = 'Majinviews1$'; // Asegúrate de usar la contraseña correcta. Si no hay contraseña, déjalo vacío.
$database = 'otomipedia';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>