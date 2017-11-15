<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/6ded49a063.js', array(), '4.7.0', false);
	wp_enqueue_script( 'typekit', 'https://use.typekit.net/snk0mcr.js', array(), '', false );
	wp_enqueue_script( 'loadtypekit', get_template_directory_uri() . '/dist/assets/js/typekit.js', array(), '', false );
	wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Oswald:400');
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/dist/assets/css/app.css?v='.time(), array(), '2.10.3', 'all' );


	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
	wp_enqueue_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array());
	// Enqueue Founation scripts
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/dist/assets/js/app.js', array( 'jquery' ), '2.10.3', true );

	// Enqueue FontAwesome from CDN. Uncomment the line below if you don't need FontAwesome.
	//wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );


	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
