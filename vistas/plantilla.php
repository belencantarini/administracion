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
                    <p class="h4 mb-0 text-uppercase titulo">Administración Dinatale</p>
                    <p class="mb-0">Consorcios</p>
                </div>
            </a>
        </div>
        <div class="seccionText">
            <div class="d-flex">
                <a class="navbar-brand flex-wrap justify-content-center align-items-center d-none d-md-flex" href="index.php?ruta=inicio">
                    <img src="./vistas/imagenes/logo.jpg" alt="Logo" height="auto" width="100" class="d-inline-block">
                    <div class="d-flex flex-column">
                        <p class="h4 mb-0 text-uppercase titulo">Administración Dinatale</p>
                        <p class="mb-0">Consorcios</p>
                    </div>
                </a>
            </div>
            <div class="seccionRuta">
                <?php
                    if (isset($_GET["ruta"])) {
                        if (
                            $_GET["ruta"] == "inicio" ||
                            $_GET["ruta"] == "contacto" ||
                            $_GET["ruta"] == "presupuesto"
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
                ?>   
            </div>         
        </div>
        <div class="seccionImagen"> </div>
    </section>
    <footer>
        <nav class="navbar navbar-expand-lg navfooter">
            <div class="container-fluid d-flex justify-content-center justify-content-md-between px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <p class="h4 px-3">Administración Di Natale</p>
                </a>
                <div class="d-flex">
                    <ul class="mediaicons d-flex nav justify-content-center">  
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i><p class="d-none">Facebook</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-1x" aria-hidden="true"></i><p class="d-none">Instagram</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-1x" aria-hidden="true"></i><p class="d-none">Twitter</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i><p class="d-none">LinkedIn</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="mailto:belencantarini@gmail.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><p class="d-none">Gmail</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://api.whatsapp.com/send?phone=5491155086946&text=Hola!%20Vi%20tu%20sitio%20web%20sobre%20métodos%20de%20estudio%20y%20quisiera%20saber%20más!" target="_blank"><i class="fab fa-whatsapp fa-1x" aria-hidden="true"></i><p class="d-none">WhatsApp</p></a></li>
                    </ul>          
                </div>
            </div>
        </nav>
    </footer>
    </body>
</html>
