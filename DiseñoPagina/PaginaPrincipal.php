<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/PaginaPrincipal.css">
    <link rel="stylesheet" href="Fonts/fonts.css">

    <title>Pagina Principal</title>
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
                        <li><a href="Galeria.php">Galeria</a></li>

                    </ul>
                    <div class="diviconos">

                        <?php
                        if (isset($_SESSION['email'])) {

                            echo $_SESSION['Nombre'];
                        }

                        ?>

                        <button class="iconos">
                            <a href=""> <span class="material-symbols-outlined">
                                    search
                                </span></a>

                        </button>

                        <section class="seccionCabecera">
                            <ul>
                                <button class="iconos">
                                    <ul>
                                        <li>

                                            <a href="Login.php"><span class="material-symbols-outlined">
                                                    person
                                                </span> </a>
                                            <ul>
                                                <li>
                                                    <?php

                                                    if (isset($_SESSION['email'])) {

                                                        echo "<a href='Account.php'>Mi perfil</a>";
                                                        echo "<a href='logout.php'>Cerrar Sesion</a>";
                                                    }

                                                    ?>

                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </button>

                        </section>

                        <button class="iconos">

                            <a href=""> <span class="material-symbols-outlined">
                                    shopping_bag
                                </span></a>
                        </button>
                    </div>
                    <!-- Iconos Nav -->


                </nav>
            </section>
        </div>

    </div>

    <div class="slider-frame ">
        <ul>
            <li><img src="Imagenes/Teclado2.jpg" alt="" /></li>
            <li><img src="https://cdn.shopify.com/s/files/1/1473/3902/products/123.11.png?v=1670390668" alt="" /></li>
            <li><img src="https://cdn.shopify.com/s/files/1/1473/3902/products/14_370dbbf3-87fc-402b-8c90-331cf66d75ee.jpg?v=1629939263" alt="" /></li>
            <li><img src="https://cdn.shopify.com/s/files/1/1473/3902/products/untitled.685_900x.png?v=1668861992" alt="" /></li>
        </ul>

    </div>

    <div>
        <p>barra de navegacion con jsp</p>
    </div>

    <div class="APContainer1">

        <div class="apartados">

            <div class="apartado1">
                <a href=""><img class="imgKeycap" src="https://cdn.shopify.com/s/files/1/1473/3902/products/17_f1678588-cd8f-4719-82d1-f3bc7a17522e_900x.jpg?v=1662355408" alt=""></a>
            </div>

            <div class="apartado2">
                <a href=""> <img class="imgKeyboard" src="https://cdn.shopify.com/s/files/1/1473/3902/products/9_968bc3ce-bd12-4a15-877e-1695739d7efb_900x.jpg?v=1671256166" alt=""></a>
            </div>
        </div>

        <div class="apartados APContainter1">
            <div class="video">
                <iframe class="video1" width="1900" height="1000" src="https://www.youtube.com/embed/dxkptWZuAVE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

    </div>

    <div>
        <a href="#" class="btn-flotante"> </a>
        <i class="fa-solid fa-message"></i>
    </div>

    <footer class="footer">Pagina diseñada por @JACHAS</footer>

</body>

</html>