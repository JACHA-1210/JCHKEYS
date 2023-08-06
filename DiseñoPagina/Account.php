<?php
session_start();
?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Account.css">
    <link rel="stylesheet" href="Fonts/fonts.css">
    <link rel="stylesheet" href="/CSS/carrucel.css">
    <title>Cuenta</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="Imagenes/IconoPag.png" />
</head>

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
                            </a>
                            <ul>
                                <li>
                                    <a href="">Recién Llegado</a>
                                    <a href="">De Vuelta</a>
                                    <a href="">PCB</a>
                                    <a href="">Caja</a>
                                    <a href="">Placa</a>
                                    <a href="">Switches</a>
                                    <a href="">Keycaps</a>
                                    <a href="">Alfombrillas</a>
                                    <a href="">Accesorios</a>

                                </li>
                            </ul>

                        </li>


                        <li> <a href="#">Categoria Keyboards
                                <span class="material-symbols-outlined midFlecha">
                                    expand_more
                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a href="">60%</a>
                                    <a href="">65%</a>
                                    <a href="">75%</a>
                                    <a href="">85%</a>
                                    <a href="">100%</a>

                                </li>
                            </ul>
                        </li>
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

    <div class="Account">

        <h1>Mi Cuenta</h1>

    </div>

    <main id="ApartadoAccount">
        <div class="micuenta">

            <h2>Detalles de Perfil</h2>

            <div class="informacionPerfil">
                <div class="name">
                    <?php
                         if (isset($_SESSION['email'])) {

                            echo $_SESSION['Nombre'] . " " .  $_SESSION['Apellidos'];
                            
                            
                        }
                    ?>
                    <a class="EditarPerfil" href="EditarPerfil.php">Editar Perfil</a> |
                    <a href="BorrarCuenta.php">Borrar Perfil</a>
                </div>
                <div class="Loc">
                    Spain
                </div>

            </div>
        </div>

        <div class="Pedidos">
            <h2>Pedidos</h2>
            <div class="InformacionPedidos">
                <p>De momento no tienes pedidos...</p>
            </div>
        </div>


    </main>


    <div>
        <a href="#" class="btn-flotante"> </a>
        <i class="fa-solid fa-message"></i>
    </div>

    <footer class="footer">Pagina diseñada por @JACHAS</footer>

</body>

</html>