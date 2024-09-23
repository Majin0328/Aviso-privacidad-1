<?php

// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'muebles_orumaito', 3305);

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>

<!-- Formulario para la captura de datos -->
<form method="post">

    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellido_p" placeholder="Apellido Paterno" required>
    <input type="text" name="apellido_m" placeholder="Apellido Materno">
    <input type="text" name="genero" placeholder="Género">
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="text" name="estado_civil" placeholder="Estado Civil">
    <input type="text" name="nacionalidad" placeholder="Nacionalidad">
    <input type="text" name="edad" placeholder="Edad">
    <input type="text" name="ocupacion" placeholder="Ocupación">
    <input type="text" name="escolaridad" placeholder="Escolaridad">
    <input type="text" name="tipo_tarjeta" placeholder="Tipo de Tarjeta" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="date" name="fecha" placeholder="Fecha">
    <input type="password" name="contra" placeholder="Contraseña" required>

    <input type="submit" name="enviar" value="Enviar">

</form>

<?php

// Comprobamos si se ha enviado el formulario
if(isset($_POST['enviar'])) {

    // Validar si los campos están presentes antes de usarlos
    $tipo_tarjeta = isset($_POST['tipo_tarjeta']) ? $_POST['tipo_tarjeta'] : '';
    $contra = isset($_POST['contra']) ? $_POST['contra'] : '';

    // Si ambos campos están completos, procesar los datos
    if (!empty($tipo_tarjeta) && !empty($contra)) {

        // Recopilamos los demás datos del formulario
        $nombre = $_POST['nombre'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $genero = $_POST['genero'];
        $telefono = $_POST['telefono'];
        $estado_civil = $_POST['estado_civil'];
        $nacionalidad = $_POST['nacionalidad'];
        $edad = $_POST['edad'];
        $ocupacion = $_POST['ocupacion'];
        $escolaridad = $_POST['escolaridad'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];
        
        // Aquí puedes agregar un hash para la contraseña si deseas
        // $contra = password_hash($_POST['contra'], PASSWORD_DEFAULT);

        // Consulta para insertar los datos en la tabla "usuarios"
        $insertar = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, genero, telefono, estado_civil, nacionalidad, edad, ocupacion, escolaridad, tipo_tarjeta, correo, fecha, contra) 
                     VALUES ('$nombre', '$apellido_p', '$apellido_m', '$genero', '$telefono', '$estado_civil', '$nacionalidad', '$edad', '$ocupacion', '$escolaridad', '$tipo_tarjeta', '$correo', '$fecha', '$contra')";

        // Ejecutar la consulta
        if (mysqli_query($conn, $insertar)) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar los datos: " . mysqli_error($conn);
        }

    } else {
        echo "Faltan datos en los campos de tipo_tarjeta o contra.";
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
