<?php if (!defined('TPMI_LOADED')) exit('No direct script access allowed'); ?>

<!-- Contact Section -->
<section id="contact">
    <div class="section mcb-section no-margin-h no-margin-v equal-height" style="background-color:#f9f9f9">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one-third column_column">
                        <div class="column_attr clearfix align_center" style="padding:100px 10% 85px;border: 1px solid #e0e0e0; margin-left: -1px;">
                            <i class="icon-phone" style="font-size:40px;color:#1014f5;"></i>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <h6>TELÉFONO</h6>
                            <h4 style="color:#1014f5"><a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a></h4>
                        </div>
                    </div>
                    <div class="column mcb-column one-third column_column">
                        <div class="column_attr clearfix align_center" style="padding:100px 7% 85px;border: 1px solid #e0e0e0; margin-left: -1px;">
                            <i class="icon-location" style="font-size:40px;color:#1014f5;"></i>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <h6>DIRECCIÓN</h6>
                            <h4 style="color:#1014f5"><?php echo CONTACT_ADDRESS; ?></h4>
                        </div>
                    </div>
                    <div class="column mcb-column one-third column_column">
                        <div class="column_attr clearfix align_center" style="padding:100px 10% 85px;border: 1px solid #e0e0e0; margin-left: -1px;">
                            <i class="icon-mail" style="font-size:40px;color:#1014f5;"></i>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <h6>EMAIL</h6>
                            <h4 style="color:#1014f5; word-wrap: break-word"><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de contacto -->
    <div class="section mcb-section" style="padding-top:110px;padding-bottom:110px">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix align_center" style="padding:0 5%">
                            <h2 style="color:#1014f5;">Solicita tu Cotización</h2>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <p class="big">Completa el siguiente formulario y nos pondremos en contacto contigo a la brevedad</p>
                            <hr class="no_line" style="margin:0 auto 30px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mcb-section" style="padding-top:110px;padding-bottom:70px">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix align_center">
                                    <h2></h2>
                                    <hr class="no_line" style="margin:0 auto 25px">
                                    <div id="contactWrapper">
                                        <form id="contactform">
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                            </div>
                                            <div class="column one">
                                                <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                            </div>
                                            <div class="column one">
                                                <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                            </div>
                                            <div class="column one">
                                                <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mapa o CTA adicional -->
    <div class="section mcb-section" style="padding-top:70px;padding-bottom:70px;background-color:#1014f5">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one-second valign-middle clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix" style="padding:0 10%">
                            <h3 style="color:#ffffff;">¿Necesitas una cotización urgente?</h3>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <p style="color:#ffffff;">Contáctanos por WhatsApp y recibe atención inmediata de nuestros asesores técnicos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap mcb-wrap one-second valign-middle clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix align_center">
                            <a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>?text=Hola, necesito una cotización urgente" class="button button_size_3" style="background-color:#25d366;border-color:#25d366" target="_blank">
                                <span class="button_label"><i class="icon-whatsapp"></i> CONTACTAR POR WHATSAPP</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript para manejo del formulario -->
<script>
    jQuery(document).ready(function($) {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var messageDiv = $('#contact-message');
            var submitButton = form.find('button[type="submit"]');

            // Deshabilitar botón
            submitButton.prop('disabled', true).find('.button_label').text('ENVIANDO...');

            // Enviar formulario
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        messageDiv.removeClass('error').addClass('success')
                            .css({
                                'background-color': '#d4edda',
                                'color': '#155724',
                                'border': '1px solid #c3e6cb'
                            })
                            .html('<strong>¡Éxito!</strong> ' + response.message)
                            .slideDown();
                        form[0].reset();
                    } else {
                        messageDiv.removeClass('success').addClass('error')
                            .css({
                                'background-color': '#f8d7da',
                                'color': '#721c24',
                                'border': '1px solid #f5c6cb'
                            })
                            .html('<strong>Error:</strong> ' + response.message)
                            .slideDown();
                    }
                },
                error: function() {
                    messageDiv.removeClass('success').addClass('error')
                        .css({
                            'background-color': '#f8d7da',
                            'color': '#721c24',
                            'border': '1px solid #f5c6cb'
                        })
                        .html('<strong>Error:</strong> Hubo un problema al enviar el formulario. Por favor intenta nuevamente.')
                        .slideDown();
                },
                complete: function() {
                    // Rehabilitar botón
                    submitButton.prop('disabled', false).find('.button_label').text('ENVIAR COTIZACIÓN');

                    // Ocultar mensaje después de 5 segundos
                    setTimeout(function() {
                        messageDiv.slideUp();
                    }, 5000);
                }
            });
        });
    });
</script>