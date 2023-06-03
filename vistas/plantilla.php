<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="./vistas/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Poppins:wght@300;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Administración Dinatale</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <section class="d-flex flex-column flex-md-row seccionMain flex-grow-1">
        <div>
            <a class="navbar-brand flex-wrap align-items-center justify-content-center d-flex d-md-none" href="index.php?ruta=inicio">
                <img src="./vistas/imagenes/logo.jpg" alt="Logo" height="auto" width="100" class="d-inline-block">
                <div class="d-flex flex-column">
                    <p class="mb-0 text-uppercase titulo ">Administracion Dinatale</p>
                    <p class="mb-0 text-center">Consorcios</p>
                </div>
            </a>
        </div>
        <div class="seccionText">
            <div class="d-flex">
                <a class="navbar-brand flex-wrap justify-content-center align-items-center d-none d-md-flex" href="index.php?ruta=inicio">
                    <img src="./vistas/imagenes/logo.jpg" alt="Logo" height="auto" width="100" class="d-inline-block">
                    <div class="d-flex flex-column">
                        <p class="mb-0 text-uppercase titulo">Administracion Dinatale</p>
                        <p class="mb-0">Consorcios</p>
                    </div>
                </a>
            </div>
            <div class="seccionRuta m-auto my-4">
                <?php
                    if (isset($_GET["ruta"])) {
                        if (
                            $_GET["ruta"] == "inicio" ||
                            $_GET["ruta"] == "contacto"
                        ) {
                            include "paginas/" . $_GET["ruta"] . ".php";
                        } else {
                            include "paginas/error404.php";
                        }
                    } else {
                        include "paginas/inicio.php";
                    }
                    if (isset($_GET["exito_envio"])) {
                        exitoEnvioContactoSweetAlert();
                        redireccionContacto();
                    }
                    if (isset($_GET["error_envio"])) {
                        errorEnvioContactoSweetAlert();
                        redireccionContacto();
                    }
                ?>   
            </div>         
        </div>
        <div class="seccionImagen"> </div>
    </section>
    <footer class="d-flex pt-2">
        <nav class="navbar navbar-expand-lg navfooter w-100">
            <div class="d-flex px-3 px-sm-5 flex-column flex-xxl-row w-100 justify-content-xl-between">
                <p class="px-3 text-center text-xl-start titulo">Administración Dinatale</p>
                <div class="d-flex">
                    <ul class="d-flex nav justify-content-center w-100 justify-content-xl-start">  
                        <li class="nav-item"><a class="nav-link d-flex py-0"><p class="my-1 text-center">Dirección: Tte. Gral. Juan Domingo Peron 1143 - 6to. piso - Oficina "79"</p></a></li>
                        <li class="nav-item "><a class="nav-link d-flex py-0" href="mailto:administraciondinatale@gmail.com"><p class="my-1 text-center">E-mail: administraciondinatale@gmail.com</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex py-0" href="tel:+5491143826817"><p class="my-1 text-center">Telefono/Fax: 011-4382-6817</p></a></li>
                    </ul>          
                </div>
            </div>
        </nav>
    </footer>
    </body>
</html>
