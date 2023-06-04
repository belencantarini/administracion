<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="./vistas/css/style.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600&family=Kanit:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;800&display=swap" rel="stylesheet">    
    <!-- Fuentes -->
    <link rel="icon" type="image/png" href="./vistas/imagenes/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Administración Dinatale</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <section class="d-flex flex-column flex-md-row seccionMain flex-grow-1">
        <div>
            <a class="navbar-brand flex-wrap align-items-end justify-content-center d-flex d-md-none gap-3 my-3" href="index.php?ruta=inicio">
                <img src="./vistas/imagenes/logo.png" alt="Logo" height="auto" width="72" class="d-inline-block">
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-0 text-uppercase titulo d-flex gap-2">
                        <p>Administracion</p>
                        <p>Dinatale</p>
                    </div>                     
                    <p class="mb-0 text-center text-uppercase">Consorcios</p>
                </div>
            </a>
        </div>
        <div class="seccionText">
            <div class="d-flex">
                <a class="navbar-brand flex-wrap justify-content-center align-items-end d-none d-md-flex gap-3 my-3" href="index.php?ruta=inicio">
                    <img src="./vistas/imagenes/logo.png" alt="Logo" height="auto" width="72" class="d-inline-block">
                    <div class="d-flex flex-column">
                        <div class="mb-1 text-uppercase align-items-center titulo d-flex gap-2">
                            <p>Administracion</p>
                            <p>Dinatale</p>
                        </div>                        
                        <p class="mb-0 text-uppercase ms-2">Consorcios</p>
                    </div>
                </a>
            </div>
            <div class="m-auto my-4 seccionRuta">
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
    <footer class="d-flex">
        <nav class="navbar navbar-expand-lg navfooter w-100">
            <ul class="d-flex flex-column flex-xl-row nav w-100 justify-content-xl-evenly align-items-center">  
                <div class="text-uppercase tituloFooter d-flex gap-2 px-3 py-0">
                    <p class="mb-1">Administracion</p>
                    <p class="mb-1">Dinatale</p>
                </div>
                <li class="nav-item"><a class="nav-link d-flex py-0"><p class="mb-0">Dirección: Tte. Gral. Juan Domingo Peron 1143 - 6to. piso - Oficina "79"</p></a></li>
                <li class="nav-item"><a class="nav-link d-flex py-0" href="mailto:administraciondinatale@gmail.com"><p class="mb-0">E-mail: administraciondinatale@gmail.com</p></a></li>
                <li class="nav-item"><a class="nav-link d-flex py-0" href="tel:+5491143826817"><p class="mb-0">Telefono/Fax: 011-4382-6817</p></a></li>
            </ul>          
        </nav>
    </footer>
    </body>
</html>
