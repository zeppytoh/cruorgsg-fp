<?php
/**
 * Customize the output of menus for Foundation top bar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
 */
 if ( ! class_exists('FoundationPress_Footer_Walker')) :
 	class FoundationPress_Footer_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"menu vertical nested\" data-toggle>\n";
		}
 	}
endif;
