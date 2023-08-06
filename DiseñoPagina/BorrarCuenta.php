<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Crear conexión

$conexion = mysqli_connect("localhost", "root", "") or die("Error al connectar a la bbdd");

$db = mysqli_select_db($conexion, "jchkeys") or die("Error al connectar a la bbdd");


// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Preparar consulta DELETE
$id_cliente = $_GET['id_cliente'];
$query = "DELETE FROM clientes WHERE id = $id_cliente";

// Ejecutar consulta
if (mysqli_query($conexion, $query)) {
    echo "Perfil borrado exitosamente";
} else {
    echo "Error al borrar perfil: " . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);
?>



