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
        $mail->Username   = 'ad5e1effac35f0';      // Tu usuario de Brevo o email del hosting
        $mail->Password   = '0f3fcc65941155';   // Tu clave
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 2525;

        // Destinatario
        $mail->setFrom('info@duomex.es', 'Test Local');
        $mail->addAddress('info@duomex.es');

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Prueba desde Localhost';
        $mail->Body    = 'Si lees esto, el envío desde local funciona.';
        $mail->AltBody = 'Si lees esto, el envío desde local funciona.';

        $mail->send();
        echo "Correo enviado correctamente desde localhost.";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
