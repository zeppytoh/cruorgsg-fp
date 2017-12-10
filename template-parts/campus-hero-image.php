<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<div class="front-hero" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('fp-medium'); ?>, small], [<?php echo the_post_thumbnail_url('fp-large'); ?>, medium], [<?php echo the_post_thumbnail_url('fp-large'); ?>, large], [<?php echo the_post_thumbnail_url('fp-xlarge'); ?>, xlarge]">

				<h1><?php
				$subhead = get_post_meta(get_the_ID(), 'page-subheader', true);
				if (!empty($subhead)) {
					echo $subhead;
				}
				 ?></h1>


		<!-- <div class="bottom-content-section" data-magellan data-threshold="0">
			<a href="#main-content-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
		</div> -->
	</div>

<?php endif;
