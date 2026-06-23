<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->

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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=DM+Sans:100,200,300,400,400italic,500,600,700,700italic,900&display=swap'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inter:100,200,300,400,400italic,500,600,700,700italic,900&display=swap'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=DM+Serif+Display:100,200,300,400,400italic,500,600,700,700italic,900&display=swap'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900&display=swap'>

    <!-- CSS -->
    <link rel='stylesheet' href='assets/css/global.css'>
    <link rel='stylesheet' href='assets/css/structure.css'>
    <link rel='stylesheet' href='assets/css/industry2.css'>
    <link rel='stylesheet' href='assets/css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/plugins/rs-plugin-6.custom/css/rs6.css">

    <!-- Custom Styles for OnePage -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        .menu-main a {
            cursor: pointer;
        }

        section {
            position: relative;
        }

        /* Fix para Revolution Slider Background */
        #home .rev-slidebg {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover;
        }

        .mfn-main-slider {
            min-height: 700px;
            position: relative;
        }

        #rev_slider_1_1_wrapper,
        #rev_slider_1_1 {
            width: 100% !important;
            height: 700px !important;
            overflow: visible;
        }

        .rs-module-wrap {
            min-height: 700px !important;
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
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }

        .whatsapp-icon {
            margin-top: 16px;
        }
    </style>
</head>

<body class="home page template-slider style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding hide-love no-shadows header-split header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tr-menu">
    <div id="Wrapper">
        <!-- Header -->
        <div id="Header_wrapper">
            <header id="Header">
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="index-industry2.html" title="BeIndustry 2 - Betheme" data-height="60" data-padding="40"><img class="logo-main scale-with-grid" src="assets/images/industry2.png" data-retina="assets/images/retina-industry2.png" data-height="88"><img class="logo-sticky scale-with-grid" src="assets/images/industry2.png" data-retina="assets/images/retina-industry2.png" data-height="88"><img class="logo-mobile scale-with-grid" src="assets/images/industry2.png" data-retina="assets/images/retina-industry2.png" data-height="88"><img class="logo-mobile-sticky scale-with-grid" src="assets/images/industry2.png" data-retina="assets/images/retina-industry2.png" data-height="88"></a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu-left" class="menu menu-main menu_left">
                                            <li class=" current-menu-item page_item current_page_item"> <a href="index-industry2.html"><span>INICIO</span></a> </li>
                                            <li> <a href="assets/about.html"><span>ACERCA DE</span></a> </li>
                                            <li> <a href="assets/services.html"><span>SERVICIOS</span></a> </li>
                                        </ul>
                                        <ul id="menu-main-menu-right" class="menu menu-main menu_right">
                                            <li> <a href="content/industry2/press.html"><span>NOTICIAS</span></a> </li>
                                            <li> <a href="content/industry2/contact.html"><span>CONTACTO</span></a> </li>
                                            <li> <a target="_blank" href="https://1.envato.market/9ZxXY"><span><span style="padding: 0; color: #F9D3DB;">BUY NOW</span></span></a> </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper"> <a href="https://1.envato.market/9ZxXY" class="action_button" target="_blank">Buy now</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfn-main-slider mfn-rev-slider">
                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                        <rs-module id="rev_slider_1_1" data-version="6.3.3">
                            <rs-slides>
                                <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"> <img src="assets/images/industry2-slider-bg.jpg" class="rev-slidebg">
                                    <rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:80px,80px,0,80px;yo:261px,261px,163px,163px;" data-text="w:normal;s:60,60,50,50;l:70,70,60,60;a:left,left,center,center;" data-dim="w:600px,600px,550px,550px;" data-frame_0="x:50,50,31,31;" data-frame_1="st:100;sp:800;sR:100;" data-frame_999="o:0;st:w;sR:8100;" style="z-index:8;font-family:DM Serif Display;"> Producing high quality oil with care for environment </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:-80px,-80px,-50px,-50px;yo:250px,250px,156px,156px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:500px,500px,313px,313px;h:329px,329px,205px,205px;" data-vbility="t,t,f,t" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:200;sp:800;sR:200;" data-frame_999="o:0;st:w;sR:8000;" style="z-index:13;"><img src="assets/images/industry2-slider-pic1.jpg" width="780" height="513"> </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-2" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:180px,180px,112px,112px;yo:380px,380px,237px,237px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:80px,80px,50px,50px;h:80,80,50,50;" data-vbility="t,t,f,t" data-border="bor:90px,90px,90px,90px;" data-frame_0="sX:0.8;sY:0.8;" data-frame_1="e:power4.out;st:350;sp:800;sR:350;" data-frame_999="o:0;st:w;sR:7850;" style="z-index:14;background-color:#105d42;"></rs-layer><a id="slider-1-slide-1-layer-3" class="rs-layer prettyphoto" href="https://www.youtube.com/watch?v=z0jjTU-H43M" target="_self" data-type="text" data-rsp_ch="on" data-xy="x:r;xo:70px,70px,43px,43px;yo:405px,405px,253px,253px;" data-text="w:normal;s:20,20,12,12;l:30,30,18,18;" data-vbility="t,t,f,t" data-frame_0="sX:0.9;sY:0.9;" data-frame_1="st:400;sp:800;sR:400;" data-frame_999="o:0;st:w;sR:7800;" style="z-index:15;font-family:DM Serif Display;">How we work? <i style="color:#ffd769;" class="material-icons">play_arrow</i> </a>
                                    <rs-layer id="slider-1-slide-1-layer-5" data-type="object" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;yo:50px,50px,31px,31px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:16;font-family:Roboto;"></rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-6" data-type="object" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;yo:50px,50px,31px,31px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:17;font-family:Roboto;"></rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-7" data-type="object" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;yo:50px,50px,31px,31px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:18;font-family:Roboto;"></rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-9" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:80px,80px,-160px,-160px;yo:535px,535px,417px,417px;" data-text="w:normal;l:30;" data-frame_0="x:50,50,31,31;" data-frame_1="st:150;sp:800;sR:150;" data-frame_999="o:0;st:w;sR:8050;" style="z-index:9;font-family:DM Serif Display;"> The need. </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-10" data-type="text" data-color="#ffd769" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:380px,380px,160px,160px;yo:535px,535px,417px,417px;" data-text="w:normal;l:30;" data-frame_0="x:50,50,31,31;" data-frame_1="st:250;sp:800;sR:250;" data-frame_999="o:0;st:w;sR:7950;" style="z-index:11;font-family:DM Serif Display;"> The solution. </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-11" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:210px,210px,0,210px;yo:535px,535px,417px,417px;" data-text="w:normal;l:30;" data-frame_0="x:50,50,31,31;" data-frame_1="st:200;sp:800;sR:200;" data-frame_999="o:0;st:w;sR:8000;" style="z-index:10;font-family:DM Serif Display;"> The research. </rs-layer><a id="slider-1-slide-1-layer-12" class="rs-layer rev-btn" href="assets/about.html" target="_self" data-type="button" data-color="#363636" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:80px,80px,0,80px;yo:643px,643px,532px,532px;" data-text="w:normal;s:12,12,14,14;l:55;ls:1px,1px,0px,0px;fw:700;" data-dim="minh:0px,0px,none,0px;" data-padding="r:40;l:40;" data-frame_0="x:50,50,31,31;" data-frame_1="st:300;sp:800;sR:300;" data-frame_999="o:0;st:w;sR:7900;" data-frame_hover="c:#363636;bgc:#fece4d;bor:0px,0px,0px,0px;bri:100%;" style="z-index:12;background-color:#ffd769;font-family:Inter;">SEE MORE DETAILS </a> </rs-slide>
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

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hola, necesito información" class="whatsapp-float" target="_blank" title="Contactar por WhatsApp">
        <i class="icon-whatsapp whatsapp-icon"></i>
    </a>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
    <script src="assets/plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
    <script src="assets/js/jquery.plugins.js"></script>
    <script src="assets/js/jquery.jplayer.min.js"></script>
    <script src="assets/js/mfn.menu.js"></script>
    <script src="assets/js/scripts.js"></script>
    
    <!-- Smooth Scroll Script -->
    <script>
        jQuery(document).ready(function($) {
            // Smooth scroll para enlaces del menú
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Actualizar clase activa en el menú al hacer scroll
            $(window).on('scroll', function() {
                var scrollPos = $(document).scrollTop() + 150;
                $('.menu-main a[href^="#"]').each(function() {
                    var currLink = $(this);
                    var refElement = $(currLink.attr('href'));
                    if (refElement.length && refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $('.menu-main li').removeClass('current-menu-item');
                        currLink.parent('li').addClass('current-menu-item');
                    }
                });
            });
        });
    </script>

    <!-- Revolution Slider Init -->
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
                console.log("To fix this, you can:");
                console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
                console.log("2. Find the double jQuery.js inclusion and remove it");
            }
        }

        var tpj = jQuery;
        var revapi1;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};

        RS_MODULES.modules["revslider11"] = {
            once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
            init: function() {
                window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ?
                    document.getElementById("rev_slider_1_1") : window.revapi1;

                if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                    window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                    if (window.revapi1initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider11"].init()
                    });
                    return;
                }

                window.revapi1 = jQuery(window.revapi1);
                if (window.revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                    return;
                }

                revapi1.revolutionInit({
                    sliderType: "standard",
                    jsFileLocation: "assets/plugins/rs-plugin-6.custom/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "hesperiden",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 768,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [700, 700, 500, 400],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        }
    </script>

</body>

</html>