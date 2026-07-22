<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Cargar variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Aseguramos que la respuesta sea siempre JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Sanitización
    $nombre    = htmlspecialchars(trim($_POST['nombre'] ?? ''), ENT_QUOTES, 'UTF-8');
    $telefono  = trim($_POST['telefono'] ?? '');
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $empresa   = htmlspecialchars(trim($_POST['empresa'] ?? ''), ENT_QUOTES, 'UTF-8');
    $mensaje   = htmlspecialchars(trim($_POST['mensaje'] ?? ''), ENT_QUOTES, 'UTF-8');

    // 2. Colección de errores
    $errors = [];

    // Validar Nombre
    if (empty($nombre)) $errors['nombre'] = 'El nombre es obligatorio.';

    // Validar Teléfono
    $telefono_limpio = str_replace([' ', '-', '+34'], '', $telefono);
    if (empty($telefono_limpio) || !preg_match('/^[6789]\d{8}$/', $telefono_limpio)) {
        $errors['telefono'] = 'Introduce un teléfono válido (9 dígitos).';
    }

    // Validar Email (Opcional)
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'El formato de email no es válido.';
    }

    // Validar Mensaje
    if (empty($mensaje)) $errors['mensaje'] = 'Por favor, escribe un mensaje.';

    // Si hay errores, respondemos inmediatamente con ellos
    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'errors' => $errors]);
        exit;
    }

    // 3. Envío del email si todo está correcto
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 2525;

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
        // Error de servidor al enviar
        echo json_encode(['status' => 'error', 'errors' => ['general' => 'Error al enviar el mensaje. Inténtalo más tarde.']]);
        exit;
    }
} else {
    // Si intentan entrar a contacto.php directamente por URL
    header("Location: index.php");
    exit;
}
