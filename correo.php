<?php

    $destino_correo = "virgilio.padron.sop.j@gmail.com";

    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $texto = $_POST['area'];

    $mensaje = "Nombre: " . $nombre . "\n" . "Correo: " . $email . "\n" . "telefono: " . $telefono . "\n" . "Mensaje: " . $texto;

    mail($destino_correo, "Info", $mensaje);

    header('Location:index.html');

?>