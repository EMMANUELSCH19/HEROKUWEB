<?php
    require("conexion.php");

    $nombre = "";
    $apellido = "";
    $email = "";
    $celular = "";
    $fecha = "";
    $sexo = "";
    $contrasena = "";
    $asunto = "Registro exitoso";

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }
    if(isset($_POST['apellido'])){
        $apellido = $_POST['apellido'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['celular'])){
        $celular = $_POST['celular'];
    }
    if(isset($_POST['fecha'])){
        $fecha = $_POST['fecha'];
    }
    if(isset($_POST['sexo'])){
        $sexo = $_POST['sexo'];
    }
    if(isset($_POST['contrasena'])){
        $contrasena = $_POST['contrasena'];
    }

    //construccion del cuerpo del correo
    $mensaje = "Se registro con exito con el correo $email, recuerde su contraseña es: $contrasena";//esto es el mensaje en el correo
    $header = "From: no-reply@mail.com"."\r\n"; //quien lo manda 
    $header .= "X-Mailer: PHP/".phpversion()."\r\n"; //esto la neta no se, solo lo copie XD
    $mail = mail($email, $asunto, $mensaje, $header);//variable para mandar el mensaje 

    $encrypt = new encriptar();
    $hash = $encrypt->encriptar_password($contrasena);

    $sql = "INSERT INTO usuarios (id, nombre, apellido, email, celular, fecha, sexo, contrasena) VALUES ('', '$nombre', '$apellido', '$email', '$celular', '$fecha', '$sexo', '$hash')";
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    if($mail){
        echo"<script type=\"text/javascript\">alert('Registro exitoso'); window.location='https://bellalovers.herokuapp.com';</script>";
    }

    // ! EVOS 
// * SE ME FUE EL INTERNET :)





?>