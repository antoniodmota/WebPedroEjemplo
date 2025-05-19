<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre  = htmlspecialchars($_POST['nombre']);
    $email   = htmlspecialchars($_POST['email']);
    $asunto  = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destino = "antoniodmota1996@gmail.com";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email";

    if (mail($destino, $asunto, $contenido, $headers)) {
        echo "<h2>¡Mensaje enviado correctamente!</h2>";
    } else {
        echo "<h2>Error al enviar el mensaje.</h2>";
    }
}
?>