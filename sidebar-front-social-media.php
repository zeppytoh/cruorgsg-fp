<?php
/**
 * The frontpage social media area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'front-social-media-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
