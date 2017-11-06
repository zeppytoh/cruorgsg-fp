<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1432755250364071';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<!-- added facebook javascript -->
	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">
		<nav class="site-navigation top-bar header" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title">
<span aria-label="cru-singapore"><?php bloginfo( 'name' ); ?></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(), (is_front_page() ? '/dist/assets/images/cru-singapore-logo.svg' : '/dist/assets/images/cru-sg-logo-white.svg'); ?>"></a>
				</div>
			</div>
			<div class="top-bar-right position-right off-canvas in-canvas-for-medium" id="inCanvasMenu" data-off-canvas data-content-scroll="false">
				<?php foundationpress_top_bar_r(); ?>
			</div>
		</nav>
    <a aria-label="Open Navigation Menu" href="#nav" class="header__nav-button hide-for-medium" role="button" data-toggle="inCanvasMenu"></a>
	</header>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
