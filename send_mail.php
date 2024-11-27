<?php
// Activa la visualizacion de errores (solo para desarrollo, no en produccion)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["uploaded-file"])) {
    $file = $_FILES["uploaded-file"];
    $fileName = $file["name"];
    $fileTmpPath = $file["tmp_name"];
    $fileType = $file["type"];

    // Configuracion del correo
    $to = "plataforma@targethr.com.pe";
    $subject = "Nuevo CV enviado";
    $message = "Se ha recibido un nuevo archivo adjunto.";
    $boundary = md5(time());

    // Encabezados del correo
    $headers = "From: plataforma@targethr.com.pe\r\n";
    $headers .= "Reply-To: plataforma@targethr.com.pe\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";

    // Cuerpo del mensaje
    $body = "--{$boundary}\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "{$message}\r\n";

    // Adjuntar archivo
    if (is_uploaded_file($fileTmpPath)) {
        $fileData = file_get_contents($fileTmpPath);
        $fileDataEncoded = chunk_split(base64_encode($fileData));

        $body .= "--{$boundary}\r\n";
        $body .= "Content-Type: {$fileType}; name=\"{$fileName}\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "Content-Disposition: attachment; filename=\"{$fileName}\"\r\n\r\n";
        $body .= "{$fileDataEncoded}\r\n";
        $body .= "--{$boundary}--";
    } else {
        echo "Error al procesar el archivo adjunto.";
        exit; // Termina la ejecucion si no se subio el archivo correctamente
    }

    // Enviar correo
    if (mail($to, $subject, $body, $headers)) {
        echo "<!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Correo Enviado</title>
            <script>
                setTimeout(function() {
                    window.location.reload();
                }, 3000);
            </script>
        </head>
        <body style='text-align:center; font-family: Arial, sans-serif; margin-top:50px;'>
            <h2>Correo enviado exit</h2>
            <p>La pagina se actualizara automaticamente en 3 segundos.</p>
        </body>
        </html>";
    } else {
        http_response_code(500);
        echo "<h2>Error: No se pudo enviar el correo. Verifica la configuracion del servidor.</h2>";
    }
} else {
    http_response_code(400);
    echo "<h2>Error: Solicitud no valida. Revisa el formulario.</h2>";
}