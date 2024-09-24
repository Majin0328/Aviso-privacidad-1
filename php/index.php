<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 30px;
            color: #333;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .login-btn {
            background-color: #2575fc;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .login-btn:hover {
            background-color: #1a5bc4;
        }
        .error-msg {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="login.php" method="POST">
            <input type="text" class="input-field" name="usuario" placeholder="Usuario" required>
            <input type="password" class="input-field" name="password" placeholder="Contraseña" required>
            <button type="submit" class="login-btn">Ingresar</button>
        </form>

        <!-- Mostrar el mensaje de error si lo hay -->
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error-msg'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>
    </div>
</body>
</html>
