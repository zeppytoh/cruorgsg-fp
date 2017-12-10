<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'front-social-media-widgets',
		'name' => __( 'Front page widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this custom container.', 'foundationpress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'id' => 'content-footer-widgets',
		'name' => __( 'Content Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this content bottom container.', 'foundationpress' ),
		'before_widget' => '<section class="related"><div class="home-section-wrapper"><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></div></section>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	register_sidebar(array(
		'id' => 'footer-widgets',
		'name' => __( 'Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="footer-cell widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
