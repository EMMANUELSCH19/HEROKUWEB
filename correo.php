<?php
    //podrias commentar lo tuyo para no perderlo y yo pongo la prueba abajo
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



    // Using Awesome https://github.com/PHPMailer/PHPMailer
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandbox326fc833a44b47fe8aba05c1419681ad.mailgun.org';   // SMTP username
$mail->Password = '37518473ea0bf0d4dc5c170a1551d5e2-30b9cd6d-80bfc50d';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'no-reply@mail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('kevinhalo005@gmail.com');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>