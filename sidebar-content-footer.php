<?php
/**
 * The content-footer containing the bottom widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'content-footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
