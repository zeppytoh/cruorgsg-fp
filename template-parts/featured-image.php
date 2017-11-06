<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('fp-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('fp-large'); ?>, large], [<?php echo the_post_thumbnail_url('fp-xlarge'); ?>, xlarge]">
	</header>
<?php endif;
