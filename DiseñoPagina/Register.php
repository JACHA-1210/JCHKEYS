<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonts/fonts.css">
    <link rel="stylesheet" href="CSS/Register.css">
    <title>Registrarse</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="Imagenes/IconoPag.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#email").blur(function () {
                var email = $(this).val();

                if (email != '') {
                    $.ajax({
                        url: 'validar_usuario.php',
                        type: 'POST',
                        data: { email: email },
                        beforeSend: function () {
                            $("#status").html("<img src='Imagenes/loading.gif' /> Validando...");

                        },
                        success: function (response) {
                            // Agrega un retraso de 3 segundos antes de procesar la respuesta
                            setTimeout(function () {
                                var data = JSON.parse(response);
                                if (data.status == 'disponible') {
                                    $("#status").html("<img src='Imagenes/valido.png' id='valido' style='width: 50px; height: 50px;'/> Usuario Disponible");

                                    $("submit").attr("disabled", false);

                                }
                                else {
                                    $("#status").html("<img src='Imagenes/novalido.png' class='novalido' style='width: 50px; height: 50px;'/> Usuario Ocupado");

                                    var opcio1 = data.sugerencias[0];
                                    var opcio2 = data.sugerencias[1];
                                    var opcio3 = data.sugerencias[2];
                                    $("#opcions").html("¿Deseas utilizar alguna de estas opciones?" + "</br />" + opcio1 + "</br/>" + opcio2 + "</br/>" + opcio3);
                                    $("submit").attr("disabled", true);
                                }
                            }, 3000); // 3 segundos de retraso
                        }
                    });
                }
                else {
                    alert("El campo de correo no puede estar vacío");
                }
            });
        });
    </script>

</head>

<body>
    <?php


    $conexion = mysqli_connect("localhost", "root", "") or die("Error al connectar a la bbdd");

    $db = mysqli_select_db($conexion, "jchkeys") or die("Error al connectar a la bbdd");

    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['password']) && !empty($_POST['email'])) {
        $consulta = "INSERT INTO cuentas (Nombre, Apellidos, Correo, Contraseña) VALUES ('" . $_POST['nombre'] . "','" . $_POST['apellidos'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "');";

        $resultado = mysqli_query($conexion, $consulta) or die("Error en la consulta SQL");


        header('Location: PaginaPrincipal.php');

    }
    mysqli_close($conexion);

    ?>
    <div class="NavFix">
        <header class="header">

            <div class="container logo-nav-container">

                <a href="PaginaPrincipal.php" class="logo"> <img src="Imagenes/Logo.jpg" alt="LogoJCHKeys"
                        style=" width: 160px; max-width: 160px; padding-top: 15px;"></a>
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
                <h1>Registrate!</h1>
                <form action="" method="post">
                    <div class="inputs">
                        <input placeholder="  Nombre" type="text" id="name" required minlength="4" size="18">
                    </div>
                    <div class="inputs">
                        <input placeholder="  Apellidos" type="text" id="apellidos" required minlength="4" size="18">
                    </div>
                    <div class="inputs">
                        <input placeholder="  Email" type="email" id="email" name="email" required minlength="4"
                            size="18">
                        <div id="status"></div>
                        <div id="opcions"></div>
                    </div>
                    <div class="inputs">
                        <input placeholder="  Contraseña" type="password" id="password" name="password" required
                            minlength="4" size="18">
                    </div>
                    <div class="inputs">
                        <button class="BTReg" id="BTReg" name="button" disabled>Crear</button>
                    </div>
                    <div class="Volver">
                        <a class="VolverPagPrin" href="PaginaPrincipal.php">Volver a la Tienda</a>
                    </div>
                </form>
            </div>

        </div>

    </main>

    <footer class="footer">Pagina diseñada por @JACHAS</footer>

</body>

</html>