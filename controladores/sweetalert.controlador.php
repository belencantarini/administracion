<?php

function exitoEnvioContactoSweetAlert(){
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Mensaje enviado!',
        text: 'Gracias por contactarnos, le responderemos a la brevedad.',
        confirmButtonText:'OK',
        confirmButtonColor: '#3085d6',
    })
    </script>";
}

function errorEnvioContactoSweetAlert(){
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Hubo un error al enviar el mensaje, por favor intente nuevamente.',
        confirmButtonText:'OK',
        confirmButtonColor: '#3085d6',
    })
    </script>";
}

function redireccionContacto(){
    echo "<script>
    window.history.replaceState(null, '', 'index.php?ruta=contacto');
    </script>";
}









