<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonts/fonts.css">
    <link rel="stylesheet" href="CSS/EditarPerfil.css">
    <title>Editar Perfil</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                <h1>Editar Perfil</h1>

                
                <form action="" method="post">
                    <div class="inputs">
                        
                        <input placeholder="  Nombre"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>
                    <div class="inputs">
                        
                        <input placeholder="  Apellidos"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>
               
                    <div class="inputs">
                        
                        <input placeholder="  Contraseña"  type="password" id="name" name="name" required minlength="4"  size="18">

                    </div>
                    <div class="inputs">
                        
                        <input placeholder="  Dirección 1"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>

                    <div class="inputs">
                        
                        <input placeholder="  Ciudad"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>
                    <div class="inputs">
                        
                        <input placeholder="  Pais"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>

                    <div class="inputs">
                        
                        <input placeholder="  Codigo Postal"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>

                    <div class="inputs">
                        
                        <input placeholder="  Numero de Telefono"  type="text" id="name" name="name" required minlength="4"  size="18">

                    </div>

                    <div class="inputs">
                        
                        <button  class="BTReg" id="BTReg" name="button">Actualizar Perfil</button>

                    </div>

                    <div class="Volver">
                        
                        <a class="VolverPagPrin"  href="Account.html" >Volver al Perfil</a>

                    </div>



                </form>
            </div>

        </div>

    </main>

    <footer class="footer">Pagina diseñada por @JACHAS</footer>

</body>

</html>