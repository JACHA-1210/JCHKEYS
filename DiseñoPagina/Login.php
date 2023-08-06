<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonts/fonts.css">
    <link rel="stylesheet" href="CSS/Login.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="Imagenes/IconoPag.png" />
</head>

<?php

$email = "";
$password = "";

$loginfail = false;


$conexion = mysqli_connect("localhost", "root", "") or die("Error al connectar a la bbdd");

$db = mysqli_select_db($conexion, "jchkeys") or die("Error al connectar a la bbdd");


if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
}

$query = "SELECT * FROM cuentas WHERE Correo = '$email' AND Contraseña = '$password'";
$result = mysqli_query($conexion, $query);

//Iniciar sesion
if (mysqli_num_rows($result) > 0) {


    if ($columna = mysqli_fetch_array($result)) {
        $nombre = $columna['Nombre'];
        $apellidos = $columna['Apellidos'];
        $id_cliente = $columna['id_cliente'];
    }

    $_SESSION['email'] = $email;
    $_SESSION['Nombre'] = $nombre;
    $_SESSION['Apellidos'] = $apellidos;
    $_SESSION['id_cliente'] = $id_cliente;

    header('Location: PaginaPrincipal.php');
    exit;
} else {

    $loginfail = true;
}




?>


<body>


    <div class="NavFix">
        <header class="header">

            <div class="container logo-nav-container">

                <a href="PaginaPrincipal.php" class="logo"> <img src="Imagenes/Logo.jpg" alt="LogoJCHKeys" style=" width: 160px; max-width: 160px; padding-top: 15px;"></a>
            </div>

        </header>

        <div>
            <section class="seccionCabecera">
                <nav class="container logo-nav-container navegacion sectionNav">
                    <ul>
                        <li> <a href="#">Inicio</a></li>
                        <li> <a href="#">Tienda
                                <span class="material-symbols-outlined midFlecha">
                                    expand_more
                                </span>
                            </a></li>

                        <li> <a href="#">Categoria Keyboards
                                <span class="material-symbols-outlined midFlecha">
                                    expand_more
                                </span>
                            </a></li>
                        <li> <a href="#">JCHFANS</a></li>
                    </ul>
                    <!-- Iconos Nav -->
                    <div class="diviconos">

                        <button class="iconos">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </button>

                        <button class="iconos">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </button>

                        <button class="iconos">
                            <span class="material-symbols-outlined">
                                shopping_bag
                            </span>
                        </button>
                    </div>

                </nav>
            </section>
        </div>
    </div>

    <main id="ApartadoRegister">

        <div class="containerRegister">

            <div class="Register">
                <h1>Iniciar Sesión</h1>
                <form action="" method="post">

                    <div class="inputs">

                        <input placeholder="  Email" type="text" id="name" name="email" required minlength="4" size="18">

                    </div>
                    <div class="inputs">

                        <input placeholder="  Contraseña" type="password" id="name" name="password" required minlength="4" size="18">

                    </div>

                    <div class="inputs">

                        <button class="BTReg" id="BTReg" name="submit">Log in</button>

                    </div>

                    <?php if ($loginfail) {
                        echo "<div class='loginfail'> <p>El Usuario es incorrecto o no existe.</p> </div>";
                    } ?>


                    <div class="Volver">

                        <a class="VolverPagPrin" href="Register.php">No tienes cuenta? Créala!</a>
                        &nbsp; &nbsp; &nbsp;
                        <a class="VolverPagPrin" href="PaginaPrincipal.php">Volver a la Tienda</a>

                    </div>
                </form>
            </div>

        </div>

    </main>

    <footer class="footer">Pagina diseñada por @JACHAS</footer>

</body>

</html>