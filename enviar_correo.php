<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $to = "juanchoalfaro1@gmail.com"; // Cambia esto a tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $message = "Nombre: $nombre\n";
    $message .= "Email: $email\n";
    $message .= "Mensaje:\n$mensaje";

    if (mail($to, $subject, $message, $headers)) {
        echo "¡Mensaje enviado exitosamente!";
    } else {
        echo "Ha ocurrido un error al enviar el mensaje.";
    }
}
?>
