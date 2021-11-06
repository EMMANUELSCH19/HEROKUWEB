<?php
    require("conexion.php");
    include_once("mcript.php");

    $nombre = "";
    $apellido = "";
    $email = "";
    $celular = "";
    $fecha = "";
    $sexo = "";
    $contrasena = "";

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

    $encrypt = new encriptar();
    $hash = $encrypt->encriptar_password($contrasena);

    $sql = "INSERT INTO usuarios (id, nombre, apellido, email, celular, fecha, sexo, contrasena) VALUES ('', '$nombre', '$apellido', '$email', '$celular', '$fecha', '$sexo', '$hash')";
    if (mysqli_query($conn, $sql)) {
        echo " New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>