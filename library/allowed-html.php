
<?php
/**
 * Allow certain data attributes inside posts and pages. Not needed for super-admin users, this filter lets normal users add more html attributes into posts directly
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

function foundationpress_filter_allowed_html($allowed, $context){

	if (is_array($context))
	{
	    return $allowed;
	}

	if ($context === 'post')
	{
            // Example case
	    $allowed['a']['data-reveal-id'] = true;
      $allowed['div']['data-magellan-target'] = true;
	}

	return $allowed;
}
add_filter('wp_kses_allowed_html', 'foundationpress_filter_allowed_html', 10, 2);
