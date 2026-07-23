<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre    = htmlspecialchars(trim($_POST['nombre'] ?? ''), ENT_QUOTES, 'UTF-8');
    $telefono  = trim($_POST['telefono'] ?? '');
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $empresa   = htmlspecialchars(trim($_POST['empresa'] ?? ''), ENT_QUOTES, 'UTF-8');
    $mensaje   = htmlspecialchars(trim($_POST['mensaje'] ?? ''), ENT_QUOTES, 'UTF-8');

    $errors = [];

    if (empty($nombre)) $errors['nombre'] = 'El nombre es obligatorio.';

    $telefono_limpio = str_replace([' ', '-', '+34'], '', $telefono);
    if (empty($telefono_limpio) || !preg_match('/^[6789]\d{8}$/', $telefono_limpio)) {
        $errors['telefono'] = 'Introduce un teléfono válido (9 dígitos).';
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'El formato de email no es válido.';
    }

    if (empty($mensaje)) $errors['mensaje'] = 'Por favor, escribe un mensaje.';

    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'errors' => $errors]);
        exit;
    }

    // Instancia de PHPMailer configurada correctamente para IONOS (Puerto 465)
    $mail = new PHPMailer(true);
    $mail->Timeout = 10; // Evita que se congele si hay problemas de red

    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USER'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Obligatorio para el puerto 465
        $mail->Port       = $_ENV['MAIL_PORT'];

        $mail->setFrom('info@duomex.es', 'Web Duomex');
        $mail->addAddress('info@duomex.es', 'Duomex.es');
        $mail->Subject = 'Nueva solicitud de información';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->Body = "
            <html>
            <body>
                <p><strong>Nueva solicitud de información</strong></p>
                <p><strong>Nombre:</strong> {$nombre}</p>
                <p><strong>Teléfono:</strong> {$telefono_limpio}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Empresa:</strong> {$empresa}</p>
                <p><strong>Mensaje:</strong><br>{$mensaje}</p>
            </body>
            </html>
        ";

        $mail->send();
        echo json_encode(['status' => 'success']);
        exit;
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'errors' => ['general' => 'Error al enviar: ' . $mail->ErrorInfo]]);
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
