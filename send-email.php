<?php
require_once 'config.php';

// Configurar headers para respuesta JSON
header('Content-Type: application/json');

// Inicializar respuesta
$response = array(
    'success' => false,
    'message' => ''
);

// Verificar que sea una petición POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Método no permitido';
    echo json_encode($response);
    exit;
}

// Validar y sanitizar datos
$name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$company = isset($_POST['company']) ? trim(strip_tags($_POST['company'])) : '';
$email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
$phone = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
$subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : 'Nueva cotización desde el sitio web';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
$privacy = isset($_POST['privacy']) ? true : false;

// Validaciones
if (empty($name)) {
    $response['message'] = 'Por favor ingresa tu nombre';
    echo json_encode($response);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Por favor ingresa un email válido';
    echo json_encode($response);
    exit;
}

if (empty($phone)) {
    $response['message'] = 'Por favor ingresa tu teléfono';
    echo json_encode($response);
    exit;
}

if (empty($message)) {
    $response['message'] = 'Por favor ingresa tu mensaje';
    echo json_encode($response);
    exit;
}

if (!$privacy) {
    $response['message'] = 'Debes aceptar la política de privacidad';
    echo json_encode($response);
    exit;
}

// Preparar el email
$to = CONTACT_EMAIL;
$email_subject = "[Cotización Web] " . $subject;

// Construir el cuerpo del email en HTML
$email_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #105d42; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #105d42; }
        .value { margin-top: 5px; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Nueva Solicitud de Cotización</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Nombre:</div>
                <div class='value'>" . htmlspecialchars($name) . "</div>
            </div>
            
            " . ($company ? "
            <div class='field'>
                <div class='label'>Empresa:</div>
                <div class='value'>" . htmlspecialchars($company) . "</div>
            </div>
            " : "") . "
            
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'>" . htmlspecialchars($email) . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Teléfono:</div>
                <div class='value'>" . htmlspecialchars($phone) . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Asunto:</div>
                <div class='value'>" . htmlspecialchars($subject) . "</div>
            </div>
            
            <div class='field'>
                <div class='label'>Mensaje:</div>
                <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>Este email fue enviado desde el formulario de contacto de " . SITE_NAME . "</p>
            <p>Fecha: " . date('d/m/Y H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

// Headers del email
$headers = array();
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: ' . SITE_NAME . ' <' . CONTACT_EMAIL . '>';
$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

// Intentar enviar el email
try {
    // Usar la función mail() de PHP (funciona en la mayoría de servidores cPanel)
    $mail_sent = mail($to, $email_subject, $email_body, implode("\r\n", $headers));
    
    if ($mail_sent) {
        $response['success'] = true;
        $response['message'] = 'Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto contigo pronto.';
        
        // Opcional: Guardar en base de datos o archivo log
        $log_entry = date('Y-m-d H:i:s') . " - Contacto de: $name ($email) - Tel: $phone\n";
        file_put_contents('contact-log.txt', $log_entry, FILE_APPEND);
        
    } else {
        $response['message'] = 'Hubo un problema al enviar el mensaje. Por favor intenta nuevamente o contáctanos por teléfono.';
    }
    
} catch (Exception $e) {
    $response['message'] = 'Error al enviar el mensaje: ' . $e->getMessage();
}

// Enviar respuesta JSON
echo json_encode($response);
exit;
?>
