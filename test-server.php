<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Configuración - TPMI Refacciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .test-box {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .success {
            color: #28a745;
            font-weight: bold;
        }
        .error {
            color: #dc3545;
            font-weight: bold;
        }
        .warning {
            color: #ffc107;
            font-weight: bold;
        }
        h1 {
            color: #105d42;
        }
        .status-icon {
            font-size: 24px;
            margin-right: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        td:first-child {
            font-weight: bold;
            width: 40%;
        }
    </style>
</head>
<body>
    <h1>🔧 Test de Configuración del Servidor</h1>
    
    <div class="test-box">
        <h2>📋 Información del Servidor</h2>
        <table>
            <tr>
                <td>Versión PHP:</td>
                <td><?php echo phpversion(); ?></td>
            </tr>
            <tr>
                <td>Sistema Operativo:</td>
                <td><?php echo PHP_OS; ?></td>
            </tr>
            <tr>
                <td>Servidor Web:</td>
                <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
            </tr>
            <tr>
                <td>Document Root:</td>
                <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
            </tr>
        </table>
    </div>

    <div class="test-box">
        <h2>✅ Verificación de Archivos</h2>
        <?php
        $files = [
            'config.php' => 'Archivo de configuración',
            'index.php' => 'Página principal',
            'send-email.php' => 'Procesador de formulario',
            '.htaccess' => 'Configuración Apache',
            'includes/section-home.php' => 'Sección Home',
            'includes/section-about.php' => 'Sección About',
            'includes/section-services.php' => 'Sección Services',
            'includes/section-contact.php' => 'Sección Contact',
            'includes/footer.php' => 'Footer',
        ];
        
        foreach($files as $file => $description) {
            if(file_exists($file)) {
                echo "<span class='status-icon success'>✅</span> <strong>$description</strong> - OK<br>";
            } else {
                echo "<span class='status-icon error'>❌</span> <strong>$description</strong> - NO ENCONTRADO<br>";
            }
        }
        ?>
    </div>

    <div class="test-box">
        <h2>🔌 Extensiones PHP</h2>
        <?php
        $extensions = ['mysqli', 'gd', 'mbstring', 'curl', 'json'];
        foreach($extensions as $ext) {
            if(extension_loaded($ext)) {
                echo "<span class='status-icon success'>✅</span> <strong>$ext</strong> - Disponible<br>";
            } else {
                echo "<span class='status-icon warning'>⚠️</span> <strong>$ext</strong> - No disponible<br>";
            }
        }
        ?>
    </div>

    <div class="test-box">
        <h2>📧 Verificación de Email</h2>
        <?php
        if(function_exists('mail')) {
            echo "<span class='status-icon success'>✅</span> La función mail() está disponible<br>";
            echo "<p><em>Nota: Esto no garantiza que los emails se envíen correctamente. Depende de la configuración del servidor.</em></p>";
        } else {
            echo "<span class='status-icon error'>❌</span> La función mail() NO está disponible<br>";
            echo "<p><strong>Solución:</strong> Contacta a tu proveedor de hosting para habilitar el envío de emails.</p>";
        }
        ?>
    </div>

    <div class="test-box">
        <h2>📝 Configuración Actual</h2>
        <?php
        if(file_exists('config.php')) {
            require_once 'config.php';
            echo "<table>";
            echo "<tr><td>Nombre del sitio:</td><td>" . (defined('SITE_NAME') ? SITE_NAME : '<span class="error">No configurado</span>') . "</td></tr>";
            echo "<tr><td>Email de contacto:</td><td>" . (defined('CONTACT_EMAIL') ? CONTACT_EMAIL : '<span class="error">No configurado</span>') . "</td></tr>";
            echo "<tr><td>Teléfono:</td><td>" . (defined('CONTACT_PHONE') ? CONTACT_PHONE : '<span class="error">No configurado</span>') . "</td></tr>";
            echo "<tr><td>WhatsApp:</td><td>" . (defined('CONTACT_WHATSAPP') ? CONTACT_WHATSAPP : '<span class="error">No configurado</span>') . "</td></tr>";
            echo "</table>";
        } else {
            echo "<span class='status-icon error'>❌</span> No se encontró el archivo config.php";
        }
        ?>
    </div>

    <div class="test-box">
        <h2>🔒 Permisos de Archivos</h2>
        <?php
        $checkFiles = ['config.php', 'send-email.php', '.htaccess'];
        foreach($checkFiles as $file) {
            if(file_exists($file)) {
                $perms = substr(sprintf('%o', fileperms($file)), -4);
                if($perms == '0644' || $perms == '0444') {
                    echo "<span class='status-icon success'>✅</span> <strong>$file</strong> - Permisos: $perms (Correcto)<br>";
                } else {
                    echo "<span class='status-icon warning'>⚠️</span> <strong>$file</strong> - Permisos: $perms (Recomendado: 644)<br>";
                }
            }
        }
        ?>
    </div>

    <div class="test-box">
        <h2>🎯 Próximos Pasos</h2>
        <ol>
            <li>Verifica que todos los archivos tengan ✅</li>
            <li>Edita <code>config.php</code> con tu información real</li>
            <li>Sube tus imágenes y logo a <code>assets/images/</code></li>
            <li>Personaliza el contenido en los archivos de <code>includes/</code></li>
            <li>Prueba el formulario de contacto</li>
            <li><strong>IMPORTANTE:</strong> Elimina este archivo (test-server.php) por seguridad</li>
        </ol>
    </div>

    <div class="test-box" style="background-color: #fff3cd; border-left: 4px solid #ffc107;">
        <h3>⚠️ Advertencia de Seguridad</h3>
        <p><strong>Por favor elimina este archivo (test-server.php) una vez que hayas verificado la configuración.</strong></p>
        <p>Este archivo muestra información sensible del servidor que no debe ser pública.</p>
    </div>

    <div style="text-align: center; margin-top: 40px; color: #666;">
        <p>Test realizado el: <?php echo date('d/m/Y H:i:s'); ?></p>
        <a href="index.php" style="color: #105d42; font-weight: bold;">← Volver al sitio web</a>
    </div>
</body>
</html>
