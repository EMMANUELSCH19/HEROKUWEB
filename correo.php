<?php

    //CORREO AL QUE SE ENVIARA EL MENSAJE
    $destinatario = 'emichag2@gmail.com';
    $asunto = 'Asunto de prueba';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['sexo'];
    $contraseña = $_POST['contraseña'];

    //CABECERA DEL MENSAJE
    $header = "Enviado desde la pagina BELLALOVERS";
    $mensajeCompleto = "\nAtentamente: " . $nombre . "\n" . $apellido;

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>