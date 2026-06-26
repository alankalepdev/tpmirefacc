<?php if(!defined('TPMI_LOADED')) exit('No direct script access allowed'); ?>

<!-- Footer -->
<footer id="Footer" class="clearfix">
	<div class="footer_copy">
		<div class="container">
			<div class="column one">
				<div class="copyright">
					&copy; <?php echo date('Y'); ?> <strong><?php echo SITE_NAME; ?></strong>. Todos los derechos reservados. 
					| <a href="#privacy" style="color:#999">Aviso de Privacidad</a>
				</div>
				<ul class="social">
					<?php if(defined('SOCIAL_FACEBOOK') && SOCIAL_FACEBOOK): ?>
					<li class="facebook">
						<a href="<?php echo SOCIAL_FACEBOOK; ?>" title="Facebook" target="_blank">
							<i class="icon-facebook"></i>
						</a>
					</li>
					<?php endif; ?>
					
					<?php if(defined('SOCIAL_INSTAGRAM') && SOCIAL_INSTAGRAM): ?>
					<li class="instagram">
						<a href="<?php echo SOCIAL_INSTAGRAM; ?>" title="Instagram" target="_blank">
							<i class="icon-instagram"></i>
						</a>
					</li>
					<?php endif; ?>
					
					<?php if(defined('SOCIAL_LINKEDIN') && SOCIAL_LINKEDIN): ?>
					<li class="linkedin">
						<a href="<?php echo SOCIAL_LINKEDIN; ?>" title="LinkedIn" target="_blank">
							<i class="icon-linkedin"></i>
						</a>
					</li>
					<?php endif; ?>
					
					<li class="whatsapp">
						<a href="https://wa.me/<?php echo CONTACT_WHATSAPP; ?>" title="WhatsApp" target="_blank">
							<i class="icon-whatsapp"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
