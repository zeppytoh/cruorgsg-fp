<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus( array(
	'top-bar-r'  => esc_html__( 'Right Top Bar', 'foundationpress' ),
	'mobile-nav' => esc_html__( 'Mobile', 'foundationpress' ),
	'footer-r' => esc_html__('Footer Right', 'foundationpress'),
));


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_top_bar_r' ) ) {
	function foundationpress_top_bar_r() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'dropdown menu',
			'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu nav-list" data-responsive-menu="accordion medium-dropdown" data-multi-open="false" data-alignment="left">%3$s</ul>',
			'theme_location' => 'top-bar-r',
			'depth'          => 2,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
}

/**
 * Desktop navigation - footer right
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_footer_r' ) ) {
	function foundationpress_footer_r() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'menu',
			'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			'theme_location' => 'footer-r',
			'depth'          => 2,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Footer_Walker(),
		));
	}
}
/**
 * Desktop navigation - footer sm for future development
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_footer_sm' ) ) {
	function foundationpress_footer_sm() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'menu',
			'items_wrap'     => '<ul class="%2$s align-right">%3$s</ul>',
			'theme_location' => 'footer-sm',
			'depth'          => 2,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Footer_Walker(),
		));
	}
}
/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'foundationpress_mobile_nav' ) ) {
	function foundationpress_mobile_nav() {
		wp_nav_menu( array(
			'container'      => false,                         // Remove nav container
			'menu'           => __( 'mobile-nav', 'foundationpress' ),
			'menu_class'     => 'vertical menu',
			'theme_location' => 'mobile-nav',
			'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Mobile_Walker(),
		));
	}
}


/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
	function foundationpress_add_menuclass( $ulclass ) {
		$find = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
		$replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu','foundationpress_add_menuclass' );
}
