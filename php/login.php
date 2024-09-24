<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Deja esto vacío si no tienes contraseña para el usuario root
$dbname = "ola"; // Asegúrate de poner el nombre correcto de tu base de datos


// Crear conexión
$conn = new mysqli("localhost", "root", "", "ola", 3305);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Preparar la consulta para evitar inyección SQL
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
$stmt->bind_param("ss", $usuario, $password);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si el usuario existe
if ($result->num_rows > 0) {
    // Usuario y contraseña correctos
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: bienvenido.php");
} else {
    // Usuario o contraseña incorrectos
    header("Location: index.html?error=Usuario o contraseña incorrectos");
}
$stmt->close();
$conn->close();
?>
