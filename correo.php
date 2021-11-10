<?php

    //CORREO AL QUE SE ENVIARA EL MENSAJE
    $destinatario = 'emmanuel_1320114041@uptecamac.edu.mx';
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
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\n" . $apellido;

    mail($destinatario, $mensajeCompleto, $header);

    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>