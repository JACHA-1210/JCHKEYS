<?php
// Establecer la conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "") or die("Error al conectar a la bbdd");
$db = mysqli_select_db($conexion, "jchkeys") or die("Error al conectar a la bbdd");

// Obtener el valor del correo electrónico enviado desde el cliente
$correo = $_POST['email'];

// Consultar si existe algún registro en la tabla "cuentas" con ese correo electrónico
$validacion = "SELECT * FROM cuentas WHERE Correo ='$correo'";
$resultado = $conexion->query($validacion);
if ($resultado->num_rows > 0) {
    // Si hay resultados, entonces el correo electrónico ya está registrado
    $response = array('status' => 'ocupado', 'sugerencias' => array());

    // Generar 3 sugerencias de correo electrónico aleatorios
    for ($i = 0; $i < 3; $i++) {
        $random = rand(100, 999);
        $sugerencia = $correo . $random . "@gmail.com";
        array_push($response['sugerencias'], $sugerencia);
    }
} else {
    // Si no hay resultados, entonces el correo electrónico está disponible
    $response = array('status' => 'disponible');
}

// Devolver la respuesta en formato JSON
echo json_encode($response);

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>