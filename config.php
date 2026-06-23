<?php
/**
 * Configuración del sitio web
 * TPMI Refacciones
 */

// Información de la empresa
define('SITE_NAME', 'TPMI Refacciones');
define('SITE_TAGLINE', 'Líder en Refacciones Industriales');
define('SITE_DESCRIPTION', 'Empresa líder en importación y distribución de refacciones industriales de alta calidad');

// Información de contacto
define('CONTACT_EMAIL', 'ventas@tpmirefacciones.com');
define('CONTACT_PHONE', '+52 1 722 245 7593');
define('CONTACT_WHATSAPP', '5217222457593');
define('CONTACT_ADDRESS', 'Dirección de tu empresa aquí');

// Redes sociales
define('SOCIAL_FACEBOOK', 'https://facebook.com/tpmirefacciones');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/tpmirefacciones');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/tpmirefacciones');

// Configuración de email (para formulario de contacto)
define('SMTP_HOST', 'mail.tudominio.com'); // Servidor SMTP de cPanel
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ventas@tpmirefacciones.com'); // Email de cPanel
define('SMTP_PASSWORD', ''); // Contraseña del email
define('SMTP_SECURE', 'tls'); // tls o ssl

// Configuración del sitio
define('SITE_URL', 'https://tudominio.com');
define('SITE_ROOT', dirname(__FILE__));

// Zona horaria
date_default_timezone_set('America/Mexico_City');

// Prevenir acceso directo a archivos incluidos
define('TPMI_LOADED', true);
?>
