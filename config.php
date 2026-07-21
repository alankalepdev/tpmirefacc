<?php
/**
 * Configuración del sitio web
 * TPMI Refacciones
 */

// Información de la empresa
define('SITE_NAME', 'TPMI Refacciones');
define('SITE_TAGLINE', 'Líder en Refacciones Industriales');
define('SITE_DESCRIPTION', 'Empresa líder en importación y distribución de refacciones industriales de alta calidad');

// Información de contacto adolfo victoria
define('CONTACT_EMAIL_ADOLFO', 'adolfo@tpmi.com.mx');
define('CONTACT_PHONE_ADOLFO', '+52 1 444 125 0450');
define('CONTACT_WHATSAPP_ADOLFO', '5214441250450'); // Formato internacional sin espacios ni guiones
define('CONTACT_NOMBRE_ADOLFO', 'Adolfo Victor');
// Información de contacto Montserrat Alcocer
define('CONTACT_EMAIL_MONTSERRAT', 'ventas1@tpmi.com.mx');
define('CONTACT_PHONE_MONTSERRAT', '+52 1 444 313 6167');
define('CONTACT_WHATSAPP_MONTSERRAT', '5214443136167'); // Formato internacional sin espacios ni guiones
define('CONTACT_NOMBRE_MONTSERRAT', 'Montserrat Alcocer');
// Información de contacto Zulema Ibarra
define('CONTACT_EMAIL_ZULEMA', 'contacto@tpmi.com.mx');
define('CONTACT_PHONE_ZULEMA', '+52 1 444 704 1154');
define('CONTACT_WHATSAPP_ZULEMA', '5214447041154'); // Formato internacional sin espacios ni guiones
define('CONTACT_NOMBRE_ZULEMA', 'Zulema Ibarra');
// Redes sociales
define('SOCIAL_FACEBOOK', 'https://facebook.com/tpmirefacciones');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/tpmirefacciones');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/tpmirefacciones');

// Configuración del sitio
define('SITE_URL', 'https://tudominio.com');
define('SITE_ROOT', dirname(__FILE__));

// Zona horaria
date_default_timezone_set('America/Mexico_City');

// Prevenir acceso directo a archivos incluidos
define('TPMI_LOADED', true);
?>
