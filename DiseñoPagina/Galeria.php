<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Galeria</title>
    <link rel="stylesheet" type="text/css" href="CSS/galeria.css">
    <script type="text/javascript" src="js/galeria.js"></script>
    <link rel="stylesheet" href="CSS/PaginaPrincipal.css">
    <link rel="stylesheet" href="Fonts/fonts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="Imagenes/IconoPag.png" />
</head>

<body>

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
                        <li><a href="index.html">Galeria</a></li>

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

    <div id="content">
        <div id="muestra">

            <div class="boton" id="izq" onclick="imagenAnterior()">
                <img src="Imagenes/arrow_left.png" />
            </div>

            <img id="imgCentral" src="Imagenes/1.jpg" />

            <div class="boton" id="der" onclick="imagenSiguiente()">
                <img src="Imagenes/arrow.png" />
            </div>

            <div style="clear:both;"></div>
        </div>

        <div id="thumbnails">
            <img src="Imagenes/1.jpg" id="img1" onclick="mostrarImagen(this)" />
            <img src="Imagenes/2.jpg" id="img2" onclick="mostrarImagen(this)" />
            <img src="Imagenes/3.jpg" id="img3" onclick="mostrarImagen(this)" />
            <img src="Imagenes/4.jpg" id="img4" onclick="mostrarImagen(this)" />
            <img src="Imagenes/5.jpg" id="img5" onclick="mostrarImagen(this)" />
            <img src="Imagenes/6.jpg" id="img6" onclick="mostrarImagen(this)" />
        </div>
    </div>
</body>

</html>