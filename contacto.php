<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Instanciar PHP Mailer
    $mail = new PHPMailer();

    try {
        // --- CONFIGURACIÓN SMTP ---
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];   // Tu clave
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 2525;

        // Destinatario
        $mail->setFrom('info@duomex.es');
        $mail->addAddress('info@duomex.es', 'Duomex.es');
        $mail->Subject = 'Nueva solicitud de información';

        // Habilitar HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        // Definir contenido
        $contenido = '<html>';
        $contenido .= '<p>Nueva solicitud de información</p>';
        $contenido .= '<p>Nombre: ' . $_POST['nombre'] . '</p>';
        $contenido .= '<p>Teléfono: ' . $_POST['telefono'] . '</p>';
        $contenido .= '<p>Email: ' . $_POST['email'] . '</p>';
        $contenido .= '<p>Empresa: ' . $_POST['empresa'] . '</p>';
        $contenido .= '<p>Mesnaje: ' . $_POST['mensaje'] . '</p>';
        $contenido .= '</html>';

        $mail->Body = $contenido;
        $mail->AltBody = 'Texto sin HTML';

        $mail->send();
        // Redirigir al usuario al éxito
        header("Location: index.php?status=success#contacto");
        exit;
    } catch (Exception $e) {
        // Redirigir al usuario al error
        header("Location: index.php?status=error#contacto");
        exit;
    }
}
