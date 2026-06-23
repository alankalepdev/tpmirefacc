# TPMI Refacciones - Sitio Web OnePage

## 🚀 Descripción
Sitio web onepage desarrollado en PHP para TPMI Refacciones, empresa líder en distribución de refacciones industriales. El sitio incluye secciones de Home, Nosotros, Servicios y Contacto con formulario funcional.

## 📋 Requisitos del Servidor (cPanel)
- PHP 7.4 o superior
- Extensiones PHP: `mysqli`, `mail`, `gd`
- Apache con `mod_rewrite` habilitado
- Cuenta de email en cPanel configurada

## 📦 Instalación en cPanel

### Paso 1: Subir archivos
1. Accede a tu cPanel
2. Abre el **Administrador de archivos**
3. Navega a `public_html` (o la carpeta donde desees instalar)
4. Sube todos los archivos del proyecto excepto este README.md

### Paso 2: Configurar permisos
Asegúrate de que los siguientes archivos/carpetas tengan los permisos correctos:
```
config.php - 644
send-email.php - 644
.htaccess - 644
includes/ - 755
assets/ - 755
```

### Paso 3: Configurar el sitio
Edita el archivo `config.php` y actualiza los siguientes valores:

```php
// Información de la empresa
define('SITE_NAME', 'TPMI Refacciones'); // Nombre de tu empresa
define('CONTACT_EMAIL', 'ventas@tudominio.com'); // Tu email real
define('CONTACT_PHONE', '+52 1 722 245 7593'); // Tu teléfono
define('CONTACT_WHATSAPP', '5217222457593'); // WhatsApp sin + ni espacios
define('CONTACT_ADDRESS', 'Tu dirección completa aquí');

// Redes sociales (actualiza con tus URLs)
define('SOCIAL_FACEBOOK', 'https://facebook.com/tupagina');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/tuusuario');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/tuempresa');
```

### Paso 4: Configurar email (Opcional - para servidores que lo requieran)
Si tu servidor requiere SMTP autenticado, actualiza estos valores en `config.php`:
```php
define('SMTP_HOST', 'mail.tudominio.com');
define('SMTP_USERNAME', 'ventas@tudominio.com');
define('SMTP_PASSWORD', 'tu_contraseña_email');
```

### Paso 5: Verificar instalación
1. Visita tu sitio: `https://tudominio.com`
2. Verifica que todas las secciones se vean correctamente
3. Prueba el formulario de contacto enviando un mensaje de prueba

## 🎨 Personalización

### Cambiar logo
Reemplaza las siguientes imágenes en `assets/images/`:
- `industry2.png` - Logo principal
- `retina-industry2.png` - Logo para pantallas retina (2x)

### Cambiar imágenes
Las imágenes principales están en:
- Slider: `assets/images/industry2-slider-bg.jpg`
- About: `assets/images/industry2-home-pic1.jpg`

### Modificar colores
Los colores principales están en `assets/css/custom.css`. El color principal es `#105d42` (verde oscuro).

### Editar contenido
Cada sección está en un archivo separado dentro de `includes/`:
- `section-home.php` - Hero/Slider
- `section-about.php` - Acerca de nosotros
- `section-services.php` - Servicios y productos
- `section-contact.php` - Formulario de contacto
- `footer.php` - Pie de página

## 📱 Características

✅ **Diseño OnePage** - Navegación suave entre secciones
✅ **Responsive** - Adaptado a móviles, tablets y desktop
✅ **Formulario de contacto funcional** - Con validación PHP y JavaScript
✅ **Botón flotante de WhatsApp** - Para contacto directo
✅ **Optimizado para SEO** - Meta tags y estructura correcta
✅ **Slider Revolution** - Hero section animado profesional
✅ **Optimizado para cPanel** - Listo para subir y usar

## 🔧 Solución de Problemas

### El formulario no envía emails
1. Verifica que el email en `config.php` sea correcto
2. Revisa que tu servidor tenga habilitada la función `mail()` de PHP
3. Revisa el archivo `contact-log.txt` para ver si se registró el intento
4. Contacta a tu proveedor de hosting para verificar configuración de correo

### Error 500 después de subir archivos
1. Verifica que el archivo `.htaccess` se haya subido correctamente
2. Algunos servidores no permiten ciertas directivas - comenta líneas problemáticas
3. Verifica los permisos de archivos (644 para archivos, 755 para carpetas)

### Las imágenes no se ven
1. Verifica que la carpeta `assets/` se haya subido completamente
2. Revisa los permisos de la carpeta (debe ser 755)
3. Verifica las rutas en los archivos PHP

### El slider no funciona
1. Verifica que todos los archivos de `assets/plugins/rs-plugin-6.custom/` estén subidos
2. Revisa la consola del navegador para errores JavaScript
3. Asegúrate de que jQuery esté cargando correctamente

## 📞 Soporte

Para soporte técnico o consultas sobre el proyecto, contacta al desarrollador.

## 📄 Licencia

Este proyecto fue desarrollado para TPMI Refacciones. Todos los derechos reservados.

---

**Desarrollado por:** Alan Kalep Dev
**Fecha:** Junio 2026
