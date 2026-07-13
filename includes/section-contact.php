<?php if (!defined('TPMI_LOADED')) exit('No direct script access allowed'); ?>

<!-- Contact Section -->
<section id="contact">
    <div class="section mcb-section no-margin-h no-margin-v equal-height" style="background-color:#f9f9f9">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one-third column_column">
                        <div class="column_attr clearfix align_center" style="padding:100px 10% 85px;border: 1px solid #e0e0e0; margin-left: -1px;">
                            <i class="icon-user" style="font-size:40px;color:#1014f5;"></i>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <h6><?php echo CONTACT_NOMBRE_ADOLFO; ?></h6>
                            <h4 style="color:#1014f5"><?php echo CONTACT_PHONE_ADOLFO; ?></h4>
                        </div>
                    </div>
                    <div class="column mcb-column one-third column_column">
                        <div class="column_attr clearfix align_center" style="padding:100px 7% 85px;border: 1px solid #e0e0e0; margin-left: -1px;">
                            <i class="icon-user" style="font-size:40px;color:#1014f5;"></i>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <h6><?php echo CONTACT_NOMBRE_MONTSERRAT; ?></h6>
                            <h4 style="color:#1014f5"><?php echo CONTACT_PHONE_MONTSERRAT; ?></h4>
                        </div>
                    </div>
                    <div class="column mcb-column one-third column_column">
                        <div class="column_attr clearfix align_center" style="padding:100px 10% 85px;border: 1px solid #e0e0e0; margin-left: -1px;">
                            <i class="icon-user" style="font-size:40px;color:#1014f5;"></i>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <h6><?php echo CONTACT_NOMBRE_ZULEMA; ?></h6>
                            <h4 style="color:#1014f5; word-wrap: break-word"><?php echo CONTACT_PHONE_ZULEMA; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de contacto -->
    <div class="section mcb-section" style="padding-top:80px;padding-bottom:80px">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix align_center" style="padding:0 5%">
                            <h2 style="color:#1014f5;">Solicita tu Cotización</h2>
                            <hr class="no_line" style="margin:0 auto 15px">
                            <p class="big">Completa el siguiente formulario y nos pondremos en contacto contigo a la brevedad</p>
                            <hr class="no_line" style="margin:0 auto 30px">

                            <!-- Mensaje de respuesta -->
                            <div id="contact-message" style="display:none;padding:15px;margin-bottom:20px;border-radius:4px;text-align:left;"></div>

                            <div id="contact-form-wrapper" style="position:relative;">
                            <div id="form-loading" style="display:none;position:absolute;inset:0;background:rgba(255,255,255,0.8);z-index:10;border-radius:4px;align-items:center;justify-content:center;flex-direction:column;gap:12px;">
                                <div style="width:40px;height:40px;border:4px solid #e0e0e0;border-top-color:#1014f5;border-radius:50%;animation:spin 0.8s linear infinite;"></div>
                                <span style="color:#1014f5;font-weight:600;font-size:14px;">Enviando...</span>
                            </div>
                            <form id="contact-form" action="index.php" method="POST">
                                <div class="column one-second">
                                    <input placeholder="Tu nombre *" type="text" name="name" id="name" size="40" required />
                                </div>
                                <div class="column one-second">
                                    <input placeholder="Tu empresa" type="text" name="company" id="company" size="40" />
                                </div>
                                <div class="column one-second">
                                    <input placeholder="Tu email *" type="email" name="email" id="email" size="40" required />
                                </div>
                                <div class="column one-second">
                                    <input placeholder="Tu teléfono *" type="tel" name="phone" id="phone" size="40" required />
                                </div>
                                <div class="column one">
                                    <input placeholder="Asunto" type="text" name="subject" id="subject" size="40" />
                                </div>
                                <div class="column one">
                                    <textarea placeholder="Mensaje *" name="message" id="message" style="width:100%;" rows="8" required></textarea>
                                </div>
                                <div class="column one" style="text-align:left;margin-bottom:15px;">
                                    <label style="font-size:13px;color:#666;cursor:pointer;">
                                        <input type="checkbox" name="privacy" id="privacy" required style="width:auto;margin-right:8px;">
                                        Acepto el <a href="#privacy" style="color:#1014f5;">Aviso de Privacidad</a> *
                                    </label>
                                </div>
                                <div class="column one">
                                    <input type="submit" value="Enviar Cotización" id="submit-btn" class="button button_size_2 button_theme" style="cursor:pointer;" />
                                </div>
                            </form>
                            </div><!-- /#contact-form-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA WhatsApp -->
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
                            <a href="https://wa.me/<?php echo CONTACT_WHATSAPP_ADOLFO; ?>?text=Hola, necesito una cotización urgente" class="button button_size_3" style="background-color:#25d366;border-color:#25d366" target="_blank">
                                <span class="button_label"><i class="icon-whatsapp"></i> CONTACTAR POR WHATSAPP</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes spin { to { transform: rotate(360deg); } }
</style>
<script>
    jQuery(document).ready(function($) {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var messageDiv = $('#contact-message');
            var submitBtn = $('#submit-btn');
            var loading = $('#form-loading');

            submitBtn.prop('disabled', true);
            loading.css('display', 'flex');

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        messageDiv
                            .css({ 'background-color': '#d4edda', 'color': '#155724', 'border': '1px solid #c3e6cb' })
                            .html('<strong>¡Éxito!</strong> ' + response.message)
                            .slideDown();
                        form[0].reset();
                    } else {
                        messageDiv
                            .css({ 'background-color': '#f8d7da', 'color': '#721c24', 'border': '1px solid #f5c6cb' })
                            .html('<strong>Error:</strong> ' + response.message)
                            .slideDown();
                    }
                },
                error: function() {
                    messageDiv
                        .css({ 'background-color': '#f8d7da', 'color': '#721c24', 'border': '1px solid #f5c6cb' })
                        .html('<strong>Error:</strong> Hubo un problema al enviar. Por favor intenta nuevamente.')
                        .slideDown();
                },
                complete: function() {
                    submitBtn.prop('disabled', false);
                    loading.hide();
                    setTimeout(function() { messageDiv.slideUp(); }, 6000);
                }
            });
        });
    });
</script>
