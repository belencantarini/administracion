<?php

// ENVIO DE MAIL


    $nombre_form = $_POST['nombre'];
    $email_form = $_POST['email'];
    $mensaje_form = $_POST['mensaje'];
    $cuerpo_mensaje = "Nombre: " . $nombre_form . "\r\n" . "Email: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;


if(mail("administraciondinatale@gmail.com", "Mensaje enviado desde mi sitio administraciondinatale.com.ar", $cuerpo_mensaje))
{   
    header("Location: ../index.php?ruta=contacto&exito_envio");
}else{
    header("Location: ../index.php?ruta=contacto&error_envio");
}