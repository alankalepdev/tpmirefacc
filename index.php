<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
       <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title><?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?></title>
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    <meta name="keywords" content="refacciones industriales, rodamientos, bandas, cadenas, mangueras, motores eléctricos">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=DM+Sans:100,200,300,400,400italic,500,600,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Inter:100,200,300,400,400italic,500,600,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=DM+Serif+Display:100,200,300,400,400italic,500,600,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
    <!-- CSS -->
    <link rel='stylesheet' href='assets/css/global.css'>
    <link rel='stylesheet' href='assets/css/structure.css'>
    <link rel='stylesheet' href='assets/css/industry2.css'>
    <link rel='stylesheet' href='assets/css/custom.css'>
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/plugins/rs-plugin-6.custom/css/rs6.css">
    
    <!-- Custom Animations CSS -->
    <style>
        /* Smooth Scroll HTML */
        html {
            scroll-behavior: smooth;
        }
        
        /* Animaciones base */
        .column, .wrap, .section {
            opacity: 1;
            transition: opacity 0.3s ease;
        }
        
        /* Header sticky effect */
        #Header.is-sticky {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 15px rgba(37, 211, 102, 0.5);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
            box-shadow: 2px 2px 20px rgba(37, 211, 102, 0.7);
        }
        
        .whatsapp-float i {
            margin-top: 16px;
        }
        
        /* Transiciones suaves para inputs */
        input, textarea {
            transition: all 0.3s ease;
        }
        
        input:focus, textarea:focus {
            outline: none;
            border-color: #1014f5 !important;
            box-shadow: 0 0 0 3px rgba(16, 93, 66, 0.1);
        }
        
        /* Hover effects en botones */
        .button, .action_button {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .button::before, .action_button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .button:hover::before, .action_button:hover::before {
            width: 300px;
            height: 300px;
        }
        
        /* Parallax container */
        .column_attr.bg-cover {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
        
        /* Animación de entrada para imágenes */
        .image_frame {
            overflow: hidden;
        }
        
        .image_frame img {
            transition: transform 0.6s ease;
        }
        
        .image_frame:hover img {
            transform: scale(1.1);
        }
        
        /* Menu activo */
        .menu-main li.current-menu-item a {
            color: #1014f5 !important;
            font-weight: 600;
        }
        
        /* Fade in animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Loader para secciones */
        .section {
            animation: fadeIn 0.6s ease-out;
        }
        
        /* Efecto hover en cards de servicios */
        .mcb-column .column_attr {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        
        .mcb-column .column_attr:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        /* Estilo para iconos animados */
        .icon-cog, .icon-loop, .icon-docs, .icon-clock, .icon-user, .icon-trophy,
        .icon-tools, .icon-tools-2, .icon-wrench, .icon-flash,
        .icon-droplet, .icon-link, .icon-graduation, .icon-shuffle,
        .icon-export, .icon-water, .icon-attach, .icon-gauge,
        .icon-ccw, .icon-flow-cascade {
            transition: all 0.3s ease;
        }
        
        .column_attr:hover .icon-cog,
        .column_attr:hover .icon-loop,
        .column_attr:hover .icon-docs,
        .column_attr:hover .icon-clock,
        .column_attr:hover .icon-user,
        .column_attr:hover .icon-trophy,
        .column_attr:hover .icon-tools,
        .column_attr:hover .icon-tools-2,
        .column_attr:hover .icon-wrench,
        .column_attr:hover .icon-flash,
        .column_attr:hover .icon-droplet,
        .column_attr:hover .icon-link,
        .column_attr:hover .icon-graduation {
            transform: scale(1.2) rotateY(360deg);
            color: #ffd769 !important;
        }
        
        /* Hover especial para iconos amarillos en Servicios Especializados (fondo azul) */
        .column_attr:hover .icon-tools-2[style*="color:#ffd769"],
        .column_attr:hover .icon-wrench[style*="color:#ffd769"],
        .column_attr:hover .icon-graduation[style*="color:#ffd769"],
        .column_attr:hover .icon-clock[style*="color:#ffd769"] {
            color: #ffffff !important;
            transform: scale(1.2) rotateY(360deg);
        }
        
        /* Estilos para Catálogo Detallado de Productos */
        .column_attr[style*="border-left:4px solid #ffd769"] {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        
        .column_attr[style*="border-left:4px solid #ffd769"]:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-left-width: 6px !important;
        }
        
        .column_attr[style*="border-left:4px solid #ffd769"] i {
            transition: all 0.3s ease;
        }
        
        .column_attr[style*="border-left:4px solid #ffd769"]:hover i {
            transform: scale(1.15) rotate(5deg);
        }
        
        /* Progress bar scroll indicator */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #1014f5, #ffd769);
            z-index: 9999;
            transition: width 0.1s ease;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
                font-size: 24px;
            }
        }
    </style>

</head>

</head>

<body class="home page template-slider style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding hide-love no-shadows header-split header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tr-menu header-fixed">
    
    <!-- Progress bar scroll indicator -->
    <div class="scroll-progress"></div>
    
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="#Header" title="TPMIREFACCIONES" data-height="60" data-padding="40"><img class="logo-main scale-with-grid" src="assets/images/tpmirefacciones-logo.png" data-retina="assets/images/tpmirefacciones-logo.png" data-height="88"><img class="logo-sticky scale-with-grid" src="assets/images/tpmirefacciones-logo.png" data-retina="assets/images/tpmirefacciones-logo.png" data-height="88"><img class="logo-mobile scale-with-grid" src="assets/images/tpmirefacciones-logo.png" data-retina="assets/images/tpmirefacciones-logo.png" data-height="88"><img class="logo-mobile-sticky scale-with-grid" src="assets/images/tpmirefacciones-logo.png" data-retina="assets/images/tpmirefacciones-logo.png" data-height="88"></a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu-left" class="menu menu-main menu_left">
                                            <li class=" current-menu-item page_item current_page_item"> <a href="#Header"><span>INICIO</span></a> </li>
                                            <li> <a href="#about"><span>ACERCA DE</span></a> </li>
                                            <li> <a href="#services"><span>SERVICIOS</span></a> </li>
                                        </ul>
                                        <ul id="menu-main-menu-right" class="menu menu-main menu_right">
                                            <li> <a href="#press"><span>NOTICIAS</span></a> </li>
                                            <li> <a href="#contact"><span>CONTACTO</span></a> </li>
                                            
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                            <!-- <div class="top_bar_right">
                                <div class="top_bar_right_wrapper"> <a href="https://1.envato.market/9ZxXY" class="action_button" target="_blank">Buy now</a> </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="mfn-main-slider mfn-rev-slider">
                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                        <rs-module id="rev_slider_1_1" data-version="6.3.3">
                            <rs-slides>
                                <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"> <img src="assets/images/industry2-slider-bg.jpg" class="rev-slidebg">
                                    <rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:80px,80px,0,80px;yo:261px,261px,163px,163px;" data-text="w:normal;s:60,60,50,50;l:70,70,60,60;a:left,left,center,center;" data-dim="w:600px,600px,550px,550px;" data-frame_0="x:50,50,31,31;" data-frame_1="st:100;sp:800;sR:100;" data-frame_999="o:0;st:w;sR:8100;" style="z-index:8;font-family:DM Serif Display;"> Refacciones de alta calidad aun excelente precio. </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:-80px,-80px,-50px,-50px;yo:250px,250px,156px,156px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:500px,500px,313px,313px;h:329px,329px,205px,205px;" data-vbility="t,t,f,t" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:200;sp:800;sR:200;" data-frame_999="o:0;st:w;sR:8000;" style="z-index:13;"><img src="assets/images/industry2-slider-pic1.jpg" width="780" height="513"> </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-2" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:180px,180px,112px,112px;yo:380px,380px,237px,237px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:80px,80px,50px,50px;h:80,80,50,50;" data-vbility="t,t,f,t" data-border="bor:90px,90px,90px,90px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:350;sp:800;sR:350;" data-frame_999="o:0;st:w;sR:7850;" style="z-index:14;background-color:#1014f5;"></rs-layer><a id="slider-1-slide-1-layer-3" class="rs-layer prettyphoto" href="https://www.youtube.com/watch?v=z0jjTU-H43M" target="_self" data-type="text" data-rsp_ch="on" data-xy="x:r;xo:70px,70px,43px,43px;yo:405px,405px,253px,253px;" data-text="w:normal;s:20,20,12,12;l:30,30,18,18;" data-vbility="t,t,f,t" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="st:400;sp:800;sR:400;" data-frame_999="o:0;st:w;sR:7800;" style="z-index:15;font-family:DM Serif Display;">Como trabajamos? <i style="color:#ffd769;" class="material-icons"></i> </a>
                                    <rs-layer id="slider-1-slide-1-layer-5" data-type="object" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;yo:50px,50px,31px,31px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:16;font-family:Roboto;"></rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-6" data-type="object" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;yo:50px,50px,31px,31px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:17;font-family:Roboto;"></rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-7" data-type="object" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;yo:50px,50px,31px,31px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:18;font-family:Roboto;"></rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-9" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:80px,80px,-160px,-160px;yo:535px,535px,417px,417px;" data-text="w:normal;l:30;" data-frame_0="x:50,50,31,31;" data-frame_1="st:150;sp:800;sR:150;" data-frame_999="o:0;st:w;sR:8050;" style="z-index:9;font-family:DM Serif Display;"> SIEMENS. </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-10" data-type="text" data-color="#ffd769" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:380px,380px,160px,160px;yo:535px,535px,417px,417px;" data-text="w:normal;l:30;" data-frame_0="x:50,50,31,31;" data-frame_1="st:250;sp:800;sR:250;" data-frame_999="o:0;st:w;sR:7950;" style="z-index:11;font-family:DM Serif Display;"> Marathon. </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-11" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:210px,210px,0,210px;yo:535px,535px,417px,417px;" data-text="w:normal;l:30;" data-frame_0="x:50,50,31,31;" data-frame_1="st:200;sp:800;sR:200;" data-frame_999="o:0;st:w;sR:8000;" style="z-index:10;font-family:DM Serif Display;"> Falk SKF WEG. </rs-layer><a id="slider-1-slide-1-layer-12" class="rs-layer rev-btn" href="assets/about.html" target="_self" data-type="button" data-color="#363636" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:80px,80px,0,80px;yo:643px,643px,532px,532px;" data-text="w:normal;s:12,12,14,14;l:55;ls:1px,1px,0px,0px;fw:700;" data-dim="minh:0px,0px,none,0px;" data-padding="r:40;l:40;" data-frame_0="x:50,50,31,31;" data-frame_1="st:300;sp:800;sR:300;" data-frame_999="o:0;st:w;sR:7900;" data-frame_hover="c:#363636;bgc:#fece4d;bor:0px,0px,0px,0px;bri:100%;" style="z-index:12;background-color:#ffd769;font-family:Inter;">Productos </a> </rs-slide>
                            </rs-slides>
                        </rs-module>
                    </rs-module-wrap>
                </div>
            </header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">

                        <!-- About Section -->
                        <?php include 'includes/section-about.php'; ?>

                        <!-- Services Section -->
                        <?php include 'includes/section-services.php'; ?>

                        <!-- Contact Section -->
                        <?php include 'includes/section-contact.php'; ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>

    </div>

    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper"><a href="#" class="close"><i class="icon-cancel-fine"></i></a></div>
        <div class="menu_wrapper"></div>
        <div class="extras">
            <div class="extras-wrapper"></div>
        </div>
    </div>
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>
    
    <!-- GSAP & ScrollTrigger -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.js"></script>
    
    <!-- WOW.js for animations -->
    <script src="assets/js/wow.js"></script>
    
    <!-- Theme Scripts -->
    <script src="assets/js/mfn.menu.js"></script>
    <script src="assets/js/jquery.plugins.js"></script>
    <script src="assets/js/jquery.jplayer.min.js"></script>
    <script src="assets/js/animations/animations.js"></script>
    <script src="assets/js/translate3d.js"></script>
    <script src="assets/js/scripts.js"></script>
    
    <!-- Revolution Slider -->
    <script src="assets/plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
    <script src="assets/plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
    
    <!-- Smooth Scroll -->
    <script src="assets/js/SmoothScroll.js"></script>
    <!-- Revolution Slider Init -->
    <script>
        var revapi1, tpj;

        function revinit_revslider11() {
            jQuery(function() {
                tpj = jQuery;
                revapi1 = tpj("#rev_slider_1_1");
                if (revapi1 == undefined || revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                } else {
                    revapi1.revolution({
                        sliderType: "hero",
                        sliderLayout: "fullwidth",
                        visibilityLevels: "1240,1240,778,778",
                        gridwidth: "1240,1240,778,778",
                        gridheight: "1080,1080,960,960",
                        perspective: 600,
                        perspectiveType: "global",
                        editorheight: "1080,768,960,720",
                        responsiveLevels: "1240,1240,778,778",
                        progressBar: {
                            disableProgressBar: true
                        },
                        navigation: {
                            onHoverStop: false
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });
                }
            });
        }
        var once_revslider11 = false;
        if (document.readyState === "loading") {
            document.addEventListener('readystatechange', function() {
                if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
                    once_revslider11 = true;
                    revinit_revslider11();
                }
            });
        } else {
            once_revslider11 = true;
            revinit_revslider11();
        }
    </script>
    
    <!-- GSAP ScrollTrigger & Smooth Scroll Animations -->
    <script>
        // Esperar a que jQuery y el DOM estén listos
        jQuery(document).ready(function($) {
            
            console.log('%c🔧 jQuery Loaded:', 'color: #10b981; font-weight: bold;', typeof jQuery !== 'undefined' ? 'YES' : 'NO');
            console.log('%c🔧 GSAP Loaded:', 'color: #10b981; font-weight: bold;', typeof gsap !== 'undefined' ? 'YES' : 'NO');
            console.log('%c🔧 ScrollTrigger Loaded:', 'color: #10b981; font-weight: bold;', typeof ScrollTrigger !== 'undefined' ? 'YES' : 'NO');
            
            // Registrar ScrollTrigger con GSAP
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                console.log('%c✅ ScrollTrigger Registered!', 'color: #10b981; font-weight: bold;');
            } else {
                console.error('❌ GSAP or ScrollTrigger not loaded!');
                return; // Salir si no están cargados
            }
            
            // ========================================
            // 1. SMOOTH SCROLL CONFIG
            // ========================================
            if (typeof SmoothScroll !== 'undefined') {
                SmoothScroll({
                    animationTime: 800,
                    stepSize: 75,
                    accelerationDelta: 30,
                    accelerationMax: 2,
                    keyboardSupport: true,
                    arrowScroll: 50,
                    touchpadSupport: true,
                    fixedBackground: false
                });
            }
            
            // ========================================
            // 2. MENU SMOOTH SCROLL
            // ========================================
            $('a[href^="#"]').on('click', function(event) {
                const href = this.getAttribute('href');

                // Ignorar el toggle del menu responsive y enlaces vacios (#)
                if (!href || href === '#' || $(this).hasClass('responsive-menu-toggle')) {
                    return;
                }

                const target = $(href);
                if (target.length) {
                    event.preventDefault();

                    // Smooth scroll nativo
                    const targetPosition = target.offset().top - 100;
                    $('html, body').animate({
                        scrollTop: targetPosition
                    }, 1000, 'swing');
                }
            });
            
            // ========================================
            // 3. ACTIVE MENU ON SCROLL
            // ========================================
            const sections = document.querySelectorAll('section[id]');
            const menuLinks = document.querySelectorAll('.menu-main a[href^="#"]');
            
            window.addEventListener('scroll', function() {
                let current = '';
                const scrollPos = window.scrollY + 200;
                
                // Determinar sección actual
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 300;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    const sectionId = section.getAttribute('id');
                    
                    if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                        current = sectionId;
                    }
                });
                
                // Si estamos muy arriba (antes de las secciones), activar Header/Inicio
                if (window.scrollY < 300) {
                    current = 'Header';
                }
                
                // Actualizar clases del menú
                menuLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    const li = link.parentElement;
                    
                    // Remover todas las clases activas
                    li.classList.remove('current-menu-item');
                    li.classList.remove('current_page_item');
                    
                    // Agregar clase activa si coincide
                    if (href === '#' + current || 
                        (current === 'Header' && href === '#Header') ||
                        (current === 'Header' && href === '#' && window.scrollY < 300)) {
                        li.classList.add('current-menu-item');
                        li.classList.add('current_page_item');
                    }
                });
                
                // Scroll progress bar
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                const progressBar = document.querySelector('.scroll-progress');
                if(progressBar) {
                    progressBar.style.width = scrolled + "%";
                }
            });
            
            // ========================================
            // 4. FADE IN ANIMATIONS
            // ========================================
            // Animar elementos con clase .column al hacer scroll
            gsap.utils.toArray('.column').forEach((element, index) => {
                gsap.from(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: "top 85%",
                        end: "bottom 15%",
                        toggleActions: "play none none reverse"
                    },
                    opacity: 0,
                    y: 50,
                    duration: 0.6,
                    delay: index * 0.1,
                    ease: "power2.out"
                });
            });
            
            // ========================================
            // 5. COUNTER ANIMATIONS (Números/Estadísticas)
            // ========================================
            const counters = document.querySelectorAll('h2');
            counters.forEach(counter => {
                const text = counter.innerText;
                // Detectar si contiene números (como +15, 500+, 24/7)
                if (/\d/.test(text)) {
                    gsap.from(counter, {
                        scrollTrigger: {
                            trigger: counter,
                            start: "top 80%",
                            toggleActions: "play none none none"
                        },
                        textContent: 0,
                        duration: 0.6,
                        ease: "power1.out",
                        snap: { textContent: 1 },
                        onUpdate: function() {
                            // Mantener el formato original con símbolos
                            const value = Math.ceil(this.targets()[0].textContent);
                            if (text.includes('+')) {
                                counter.textContent = '+' + value;
                            } else if (text.includes('/')) {
                                counter.textContent = value + '/7';
                            } else {
                                counter.textContent = value + (text.includes('mln') ? ' mln m³' : '');
                            }
                        }
                    });
                }
            });
            
            // ========================================
            // 6. PARALLAX EFFECT ON IMAGES
            // ========================================
            gsap.utils.toArray('.column_attr.bg-cover').forEach(element => {
                gsap.to(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    },
                    backgroundPosition: "50% 100%",
                    ease: "none"
                });
            });
            
            // ========================================
            // 7. SCALE UP ON SCROLL (Productos/Servicios) - EXCLUYE FOOTER Y CONTACTO
            // ========================================
            gsap.utils.toArray('.mcb-column .column_attr').forEach(element => {
                // No animar footer ni contacto
                const section = element.closest('section');
                if (section && (section.id === 'contact' || section.id === 'footer')) {
                    return;
                }
                
                gsap.from(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: "top 90%",
                        end: "top 60%",
                        toggleActions: "play none none reverse"
                    },
                    scale: 0.9,
                    opacity: 0,
                    duration: 0.4, // Reducido de 0.6
                    ease: "back.out(1.2)"
                });
            });
            
            // ========================================
            // 8. STAGGER ANIMATION (Servicios en grid) - OPTIMIZADO
            // ========================================
            gsap.utils.toArray('.section').forEach(section => {
                // Excluir footer y contacto del stagger
                if (section.id === 'contact' || section.id === 'footer') {
                    return;
                }
                
                const items = section.querySelectorAll('.wrap');
                if (items.length > 1) {
                    gsap.from(items, {
                        scrollTrigger: {
                            trigger: section,
                            start: "top 80%",
                            toggleActions: "play none none none"
                        },
                        opacity: 0,
                        y: 20, // Reducido de 30
                        stagger: 0.1, // Reducido de 0.15
                        duration: 0.4, // Reducido de 0.6
                        ease: "power2.out"
                    });
                }
            });
            
            // ========================================
            // 9. HEADER SHRINK ON SCROLL
            // ========================================
            ScrollTrigger.create({
                start: "top -100",
                end: 99999,
                toggleClass: {
                    targets: "#Header",
                    className: "is-sticky"
                }
            });
            
            // ========================================
            // 10. BUTTON HOVER ANIMATION
            // ========================================
            document.querySelectorAll('.button, .action_button').forEach(button => {
                button.addEventListener('mouseenter', function() {
                    gsap.to(this, {
                        scale: 1.05,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });
                
                button.addEventListener('mouseleave', function() {
                    gsap.to(this, {
                        scale: 1,
                        duration: 0.3,
                        ease: "power2.inOut"
                    });
                });
            });
            
            // ========================================
            // 11. WHATSAPP BUTTON PULSE
            // ========================================
            gsap.to('.whatsapp-float', {
                scale: 1.1,
                duration: 0.6,
                ease: "power1.inOut",
                repeat: -1,
                yoyo: true
            });
            
            // ========================================
            // 12. TEXT REVEAL ANIMATION - OPTIMIZADO
            // ========================================
            gsap.utils.toArray('h2, h3, h4').forEach(heading => {
                // Excluir footer y contacto
                const section = heading.closest('section, footer');
                if (section && (section.id === 'contact' || section.id === 'Footer' || section.tagName === 'FOOTER')) {
                    return;
                }
                
                gsap.from(heading, {
                    scrollTrigger: {
                        trigger: heading,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    },
                    opacity: 0,
                    x: -30,
                    duration: 0.4, // Reducido de 0.6
                    ease: "power2.out"
                });
            });
            
            // ========================================
            // 13. FORMULARIO FOCUS ANIMATIONS
            // ========================================
            document.querySelectorAll('input, textarea').forEach(field => {
                field.addEventListener('focus', function() {
                    gsap.to(this, {
                        scale: 1.02,
                        borderColor: '#1014f5',
                        duration: 0.3
                    });
                });
                
                field.addEventListener('blur', function() {
                    gsap.to(this, {
                        scale: 1,
                        duration: 0.3
                    });
                });
            });
            
            // ========================================
            // 14. REVEAL ON SCROLL (Fade + Slide)
            // ========================================
            gsap.utils.toArray('.image_frame').forEach(img => {
                gsap.from(img, {
                    scrollTrigger: {
                        trigger: img,
                        start: "top 90%",
                        toggleActions: "play none none none"
                    },
                    opacity: 0,
                    scale: 0.8,
                    rotation: -5,
                    duration: 0.6,
                    ease: "elastic.out(1, 0.5)"
                });
            });
            
            // ========================================
            // 15. ANIMACIÓN RÁPIDA PARA FOOTER Y CONTACTO
            // ========================================
            const footerSection = document.querySelector('#Footer, footer');
            const contactSection = document.querySelector('#contact');
            
            if (contactSection) {
                gsap.from(contactSection.querySelectorAll('.column_attr'), {
                    scrollTrigger: {
                        trigger: contactSection,
                        start: "top 95%",
                        toggleActions: "play none none none"
                    },
                    opacity: 0,
                    y: 20,
                    duration: 0.3, // Muy rápido
                    stagger: 0.05,
                    ease: "power1.out"
                });
            }
            
            if (footerSection) {
                gsap.from(footerSection.querySelectorAll('.column'), {
                    scrollTrigger: {
                        trigger: footerSection,
                        start: "top 95%",
                        toggleActions: "play none none none"
                    },
                    opacity: 0,
                    y: 15,
                    duration: 0.25, // Muy rápido
                    stagger: 0.03,
                    ease: "power1.out"
                });
            }
            
            // ========================================
            // 16. CONSOLE INFO
            // ========================================
            console.log('%c✨ GSAP ScrollTrigger Animations Loaded!', 'color: #10b981; font-size: 16px; font-weight: bold;');
            console.log('%c🎯 Smooth Scroll Enabled', 'color: #3b82f6; font-size: 14px;');
            console.log('%c🚀 All animations ready!', 'color: #8b5cf6; font-size: 14px;');
            
        });
    </script>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/5215512345678?text=Hola,%20me%20gustaría%20más%20información" 
       class="whatsapp-float" 
       target="_blank" 
       title="Contáctanos por WhatsApp"
       rel="noopener noreferrer">
        <i class="icon-whatsapp"></i>
    </a>

</body>

</html>