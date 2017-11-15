<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
		</div><!-- Close container -->
		<section class="home-footer">
		<div class="footer-container" id="footer-sitemap-container" data-sticky-footer>
			<footer id="footer-sitemap" class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
		<div id="footer-contact-details-container">
			<footer id="footer-contact-details">
					<div class="footer-left">
							<div class="contact-details">
									<ul>
											<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/cru-singapore-logo.svg" width="80px"></li>

											<li><i class="fa fa-phone fa-lg" aria-hidden="true"></i>+65 6589 9600</li>

											<li><a href="#cf-modal-CF5a00a7fe0e5e75a00a9258fae6" class="caldera-forms-modal" data-form="CF5a00a7fe0e5e7" title="Click to open the form Contact Cru Singapore in a modal"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact us</a></li>

											<li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>18 Verdun Road
	#04-01 Singapore 207280</li>
											<li class="registration_no small">Reg.No. 197200238N GST Reg.No. MB8100372-X</li>
									</ul>
							</div>
					</div>
					<div class="footer-right">
							<?php foundationpress_footer_r(); ?>
					</div>
			</footer>
		</div>
	</section>

<?php wp_footer(); ?>
</body>
</html>
