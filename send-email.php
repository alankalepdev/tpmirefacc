<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/mail-config.php';
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Método no permitido';
    echo json_encode($response);
    exit;
}

// Sanitizar entradas
$name    = isset($_POST['name'])    ? trim(strip_tags($_POST['name']))    : '';
$company = isset($_POST['company']) ? trim(strip_tags($_POST['company'])) : '';
$email   = isset($_POST['email'])   ? trim(strip_tags($_POST['email']))   : '';
$phone   = isset($_POST['phone'])   ? trim(strip_tags($_POST['phone']))   : '';
$subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
$privacy = isset($_POST['privacy']);

// Validaciones
if (empty($name)) {
    $response['message'] = 'Por favor ingresa tu nombre';
    echo json_encode($response); exit;
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Por favor ingresa un email válido';
    echo json_encode($response); exit;
}
if (empty($phone)) {
    $response['message'] = 'Por favor ingresa tu teléfono';
    echo json_encode($response); exit;
}
if (empty($message)) {
    $response['message'] = 'Por favor ingresa tu mensaje';
    echo json_encode($response); exit;
}
if (!$privacy) {
    $response['message'] = 'Debes aceptar la política de privacidad';
    echo json_encode($response); exit;
}

$email_subject = '[Cotización Web] ' . ($subject ?: 'Nueva cotización desde el sitio web');

$email_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #1014f5; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #1014f5; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'><h2>Nueva Solicitud de Cotización</h2></div>
        <div class='content'>
            <div class='field'><div class='label'>Nombre:</div><div>" . htmlspecialchars($name) . "</div></div>
            " . ($company ? "<div class='field'><div class='label'>Empresa:</div><div>" . htmlspecialchars($company) . "</div></div>" : "") . "
            <div class='field'><div class='label'>Email:</div><div>" . htmlspecialchars($email) . "</div></div>
            <div class='field'><div class='label'>Teléfono:</div><div>" . htmlspecialchars($phone) . "</div></div>
            <div class='field'><div class='label'>Asunto:</div><div>" . htmlspecialchars($email_subject) . "</div></div>
            <div class='field'><div class='label'>Mensaje:</div><div>" . nl2br(htmlspecialchars($message)) . "</div></div>
        </div>
        <div class='footer'>
            <p>Enviado desde el formulario de contacto de " . SITE_NAME . "</p>
            <p>Fecha: " . date('d/m/Y H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

try {
    $mail = new PHPMailer(true);

    // SMTP
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_SECURE === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;
    $mail->Timeout    = 10;
    $mail->CharSet    = 'UTF-8';

    // Remitente y destinatario
    $mail->setFrom(SMTP_USERNAME, SMTP_FROM_NAME);
    $mail->addAddress(MAIL_TO);
    $mail->addReplyTo($email, $name);

    // Contenido
    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;

    $mail->send();

    $response['success'] = true;
    $response['message'] = 'Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto contigo pronto.';

    $log = date('Y-m-d H:i:s') . " - Contacto de: $name ($email) - Tel: $phone\n";
    file_put_contents(__DIR__ . '/contact-log.txt', $log, FILE_APPEND);

} catch (Exception $e) {
    $response['message'] = 'Hubo un problema al enviar el mensaje. Por favor intenta nuevamente o contáctanos por teléfono.';
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
}

echo json_encode($response);
exit;
