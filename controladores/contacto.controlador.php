<?php

// ENVIO DE MAIL
    $nombre_form = $_POST['nombre'];
    $email_form = $_POST['email'];
    $mensaje_form = $_POST['mensaje'];
    $cuerpo_mensaje = "Nombre: " . $nombre_form . "\r\n" . "Email: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;

mail("damian.gdl@hotmail.com", "Mensaje enviado desde mi sitio web", $cuerpo_mensaje);


// NOTIFICACION ENVIO DE MENSAJE


header("Location: ../index.php?ruta=contacto&exito_envio");
