<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-container {
            text-align: center;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .welcome-btn {
            background-color: #2575fc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .welcome-btn:hover {
            background-color: #1a5bc4;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
        <a href="logout.php" class="welcome-btn">Cerrar sesión</a>
    </div>
</body>
</html>
